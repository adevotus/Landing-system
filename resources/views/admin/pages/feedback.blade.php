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
                                                    @foreach ($feedbacks as $feedback )
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>{{$feedback->name}}</td>
                                                        <td>
                                                            {{$feedback->email}}
                                                            
                                                        </td>
                                                        <td>
                                                          {{$feedback->subject}}
                                                        </td>
                                                        <td>{{$feedback->message}}</td>
                                                       
                                                        <td>
                                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="view"><i class="fas fa-eye"></i></a>
                                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
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

                    </div>
                </section>
            </div>
          @include('layouts.admin.footer')
        </div>
    </div>

    @include('assets.admin_js')
</body>

</html>
