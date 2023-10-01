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
                        <h1>Parent Registered</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <span><a href="{{ route('create_staff') }}"><h4 class="btn btn-primary">Add parent</h4></a> </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th>First Name</th>
                                                        <th>Middle Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Job title</th>
                                                        <th>Job position</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($staffs as $staffs)
                                                    <tr>
                                                        <td>
                                                          {{$staffs->id}}  
                                                        </td>
                                                        <td>{{$staffs->Fname}}</td>
                                                        <td>{{$staffs->Mname}}</td>
                                                        <td>{{$staffs->Lname}}</td>
                                                        <td>{{$staffs->email}}</td>
                                                        <td>{{$staffs->contact}}</td>
                                                        <td>{{$staffs->job_title}}</td>
                                                        <td>{{$staffs->job_position}}</td>
                                                        <td>
                                                            <a class="btn btn-primary btn-action mr-1"data-toggle="modal"  data-target="#exampleModal{{$staffs->id}}"><i class="fas fa-pencil-alt"></i></a>

                                                            <a class="btn btn-danger btn-action" data-toggle="modal" data-target="#confirmDeleteModal{{$staffs->id}}">
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
                    </div>
                </section>
                <div class="modal fade" tabindex="-1" role="dialog" id="confirmDeleteModal{{$staffs->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModal{{$staffs->id}}Label">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this blog? 
                                <h5>{{$staffs->Fname}}.</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('staff_delete',$staffs->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal{{$staffs->id}}">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Staff</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{ url('gsa_staffs/'.$staffs->id) }}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">First Name</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="Fname" value="{{$staffs->Fname}}"
                                                    placeholder="title of publications">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">Middle Name</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="Lname" value="{{$staffs->Lname}}"
                                                    placeholder="title of publications">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">Last Name</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="Mname" value="{{$staffs->Mname}}"
                                                    placeholder="title of publications">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputAddress">Email</label>
                                                <input type="email" class="form-control" id="inputAddress" name="email" value="{{$staffs->email}}"
                                                    placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputAddress">Contact</label>
                                                <input type="number" class="form-control" id="inputAddress" name="contact" value="{{$staffs->contact}}"
                                                    placeholder="date">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputAddress2">Location</label>
                                                <input type="text" class="form-control" id="inputAddress" name="location" value="{{$staffs->location}}"
                                                placeholder="date">                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress">Job Title</label>
                                                <input type="text" class="form-control" id="inputAddress" name="job_title" value="{{$staffs->job_title}}"
                                                    placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress">Job Position</label>
                                                <input type="text" class="form-control" id="inputAddress" name="job_position" value="{{$staffs->job_position}}"
                                                    placeholder="date">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputAddress">Descriptions</label>
                                                <textarea id="" class="form-control" cols="30" rows="10" name="description" value="{{$staffs->description}}"></textarea>

                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">Save changes</button>
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
