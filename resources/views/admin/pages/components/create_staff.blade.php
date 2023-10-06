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
                      <h1>Parent Name: <span>{{$parent->name}}</span></h1>
                    </div>

                    <div class="section-body">
                      

                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 col-lg-5">
                            <div class="card profile-widget">
                                   

                                            <div class="profile-widget-description">
                                                <div class="profile-widget-name">{{ $parent->name }}
                                                    <div class="text-muted d-inline font-weight-normal">
                                                        <div class="slash"></div>Parent
                                                    </div>
                                                </div>

                                                    <p class="text-justify">
                                                    As an administrator, you are responsible for managing this website in the best possible way. Your role involves
                                                                                                                                    ensuring smooth operations, 
                                                                                                                                    maintaining high-quality content, and providing an excellent user experience. 
                                                                                                                                    Take charge and make a positive impact!
                                                                                                                                    Feel free to explore the various features and functionalities available to you. Should you have any questions or
                                                                                                                                    need assistance, 
                                                                                                                                    don't hesitate to reach out. We wish you great success in your role as the website administrator.
                                                    </p>
                                           
                                                <!-- Your profile description content here -->
                                            </div>
                            </div>

                            </div>
                            <div class="col-12 col-md-12 col-lg-7">
                                <div class="">

                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-8 col-md-8 col-lg-7">
                                            <h4>Edit Profile</h4>
                                            </div>
                                            <div class="col-4 justify-contant-end col-md-4 col-lg-4">
                                              <span class="btn  btn-danger"data-toggle="modal"
                                            data-target="#exampleModal-{{$parent->id}}"> delete</span>

                                            </div>
                                        </div>
                                        
                                    </div>
                                    <form method="{{route('parent_update',$parent->id)}}" action="" class="needs-validation"
                                        novalidate="" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $parent->name }}" required="" name="name">
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $parent->email }}" required="" name="email">
                                                    <div class="invalid-feedback">
                                                        Please fill in the email
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $parent->region }}" required="" name="region">
                                                    <div class="invalid-feedback">
                                                        Please fill in the region
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $parent->contact }}" required="" name="contact">
                                                    <div class="invalid-feedback">
                                                        Please fill in the contact
                                                    </div>
                                                </div>
                                            </div>
           

                                        </div>
                                        <div class="card-footer text-left">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </div>
                                    </form>
                                  </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal-{{$parent->id}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form action="{{ route('parent_delete',$parent->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    
                                                    <p>Are  sure to Delete? {{$parent->name}}</p>
                                                    
                                                </div>
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

                   
                </section>
            </div>
           @include('layouts.admin.footer')
        </div>
    </div>

    @include('assets.admin_js')
</body>

</html>
