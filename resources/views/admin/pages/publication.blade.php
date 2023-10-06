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
                        <h1>School Registered</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Add School.</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                       
                                                        <th>School Name</th>
                                                        <th>Email </th>
                                                        <th>Location</th>
                                                        <th>Contant</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($schools as $school)
                                                        <tr>
                                                           
                                                            <td>{{ $school->name }}</td>
                                                            <td>{{ $school->email }}</td>

                                                            <td>
                                                                {{ $school->region }}
                                                            </td>
                                                            <td>
                                                                {{ $school->phoneNumber }}
                                                            </td>
                                                            <td>
                                                            <a class="btn btn-primary btn-action mr-1"
                                                                href="{{ route('school_edit', $school->id) }}"
                                                                data-toggle="tooltip" title="View">
                                                                <i class="fas fa-eye"></i>
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
                    </div>
                </section>
              

                <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add school</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{ route('post_school') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Name</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    name="name" placeholder="school name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Region</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                name="region" placeholder="Rukwa">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Email</label>
                                            <input type="email" class="form-control" id="inputAddress"
                                                name="email" placeholder="email@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Phonenumber </label>
                                            <input type="number" class="form-control" id="inputAddress"
                                                name="phoneNumber" placeholder="number">
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">Save
                                                    </button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.admin.footer')

        </div>
    </div>
    @include('assets.admin_js')

</body>

</html>
