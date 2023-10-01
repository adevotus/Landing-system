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
                        <div class="section-header-back">
                            <a href="{{ route('gsa_staffs') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                        </div>
                        <h1>Register the new parent</h1>

                    </div>

                    <div class="section-body">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Write Your Post</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>Person Informations</h4>

                                        <form action="{{route('staff_registration')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">First Name</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="Fname"
                                                        placeholder="first name">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Middle Name</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="Mname"
                                                        placeholder="middle name">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Last Name</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="Lname"
                                    
                                                        placeholder="last name">
                                                </div>
    
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" name="email"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Contact</label>
                                                    <input type="number" class="form-control" id="inputEmail4" name="contact"
                                                        placeholder="contact">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">Location</label>
                                                    <input type="text" class="form-control" id="inputEmail4"name="location"
                                                        placeholder="location">
                                                </div>
    
                                            </div>
    
                                            <h4>Job Informations</h4>
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-5">
                                                    <label for="inputEmail4">Job Title</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="job_title"
                                                        placeholder="job title">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail4">Positions</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="job_position"
                                                        placeholder="job positions">
                                                </div>
    
    
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-9">
                                                    <label for="inputEmail4">Descriptions</label>
                                                    <textarea placeholder="your descriptions" id="" class="form-control" name="description" cols="30" rows="20"></textarea>
    
                                                </div>
                                            </div>
    
    
                                            <div class="form-group row mb-4">
                                                <div class="col-md-4"></div>
                                                <div class="col-sm-12 col-md-4">
                                                    <button type="submit" class="btn btn-primary btn-block">Register Staff</button>
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
