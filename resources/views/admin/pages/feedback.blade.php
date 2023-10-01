@include('assets.admin_css')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.admin.header')
            @include('layouts.admin.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Feedbacks and Contacts Messages</h1>

                    </div>

                    <div class="section-body">


                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        {{-- <h4>Basic DataTables</h4> --}}
                                        {{-- <span><a href="{{ route('create_staff') }}"><h4 class="btn btn-primary">create staff</h4></a> </span> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($feedbacks as $feedback)
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>{{ $feedback->name }}</td>
                                                            <td>
                                                                {{ $feedback->email }}

                                                            </td>
                                                            <td>
                                                                {{ $feedback->subject }}
                                                            </td>
                                                            <td>{{ $feedback->message }}</td>

                                                            <td>
                                                                <a class="btn btn-primary btn-action mr-1"data-toggle="modal"
                                                                    data-target="#exampleModal{{ $feedback->id }}"><i
                                                                        class="fas fa-pencil-alt"></i></a>
                                                                <a class="btn btn-danger btn-action" data-toggle="modal"
                                                                    data-target="#confirmDeleteModal{{ $feedback->id }}">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" tabindex="-1" role="dialog"
                            id="confirmDeleteModal{{ $feedback->id }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmDeleteModal{{ $feedback->id }}Label">
                                            Confirm Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this ?
                                        <h5>{{ $feedback->name }}.</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <form action="{{ route('feedback_delete', $feedback->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal{{ $feedback->id }}">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Feedback From contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">

                                            <li class="media">
                                                <img alt="image" class="mr-3 rounded-circle" width="70"
                                                    src="{{ asset('admin/assets/img/avatar/avatar-1.png') }}">
                                                <div class="media-body">
                                                    <div class="media-title mb-1" style="font-weight: 700">
                                                        {{ $feedback->name }} , {{ $feedback->email }}</div>
                                                    <div class="media-left">
                                                        <div class="text-primary" style="font-weight: 800;">
                                                            {{ $feedback->subject }}</div>
                                                    </div>
                                                    <div class="media-description text-muted text-justify">
                                                        {{ $feedback->message }}</div>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>

    @include('assets.admin_js')
</body>

</html>
