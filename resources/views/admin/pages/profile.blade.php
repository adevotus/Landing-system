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
                        <h1>Profile</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item">Profile</div>
                        </div>
                    </div>
                    <div class="section-body">
                        <?php
                        $currentTime = date('H:i'); // Get the current time in 24-hour format
                        
                        if ($currentTime >= '06:00' && $currentTime < '12:00') {
                            $greeting = 'Good morning';
                        } elseif ($currentTime >= '12:00' && $currentTime < '18:00') {
                            $greeting = 'Good afternoon';
                        } else {
                            $greeting = 'Good evening';
                        }
                        ?>

                        <h2 class="section-title">{{ $greeting }}, {{ Auth::user()->name }}</h2>
                       

                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 col-lg-5">
                                <div class="card profile-widget">
                                    <div class="profile-widget-header">
                                        <img alt="image"
                                            src="{{ asset('public/images/' . Auth::user()->profile_image) }}"
                                            class="rounded-circle profile-widget-picture">

                                    </div>
                                    <div class="profile-widget-description">
                                        <div class="profile-widget-name">{{ Auth::user()->name }}<div
                                                class="text-muted d-inline font-weight-normal">
                                                <div class="slash"></div> Web Developer
                                            </div>
                                        </div>

                                        As an administrator, you are responsible for managing this website in the best possible way. Your role involves ensuring smooth operations, 
                                        maintaining high-quality content, and providing an excellent user experience. 
                                        Take charge and make a positive impact!
                                        Feel free to explore the various features and functionalities available to you. Should you have any questions or need assistance, don't hesitate to reach out. We wish you great success in your role as the website administrator.
                                                                        </div>

                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Profile</h4>
                                    </div>
                                    <form method="post" action="{{ route('update_user') }}" class="needs-validation"
                                        novalidate="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ Auth::user()->name }}" required="" name="name">
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ Auth::user()->email }}" required="" name="email">
                                                    <div class="invalid-feedback">
                                                        Please fill in the email
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12 col-12">
                                                    <label>Profile Image</label>
                                                    <input type="file" class="form-control"
                                                        value="{{ Auth::user()->profile_image }}" required=""
                                                        name="profile_image">
                                                    <div class="invalid-feedback">
                                                        Please fill in the
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="card-footer text-left">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </div>
                                    </form>
                                  </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Passwords</h4>


                                    </div>

                                    <form method="post" action="{{ route('update_password') }}"
                                        class="needs-validation" novalidate="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-12 col-12">
                                                    <label>Current Password</label>
                                                    <input type="password" class="form-control" required=""
                                                        name="current_password">
                                                    <div class="invalid-feedback">
                                                        Please fill in the password
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control" required=""
                                                        name="password">
                                                    <div class="invalid-feedback">
                                                        Please fill in the last name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control" required=""
                                                        name="password">
                                                    <div class="invalid-feedback">
                                                        Please fill in the
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="card-footer text-left">
                                            <button class="btn btn-primary" type="submit">Update Password</button>
                                        </div>
                                    </form>
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
