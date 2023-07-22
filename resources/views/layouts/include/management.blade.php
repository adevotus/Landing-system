@include('assets.css')

<body>
    <div class="body-inner">

        @include('layouts.include.header')
        <!--/ Header end -->
        {{-- <div id="banner-area" class="banner-area">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h5 class="banner-title" style="font-size: 13px">website management</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <section id="main-container" class="main-container mb-5">
            <div class="container">
                <div class="card card-primary"
                style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <div class="card-header">
                    <h4 class="text-center" style="text-align: center">Login</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation"
                                novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control   @error('email') is-invalid @enderror"
                                        name="email" tabindex="1" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
    
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">{{ __('Password') }}</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control  @error('password') is-invalid @enderror"
                                        name="password" tabindex="2" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input"
                                            tabindex="3" id="remember-me"
                                            {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="custom-control-label" for="remember-me">
                                            {{ __('Remember Me') }}</label>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"
                                        tabindex="4">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </form>
                        </div>
    
                        <div class="col-lg-6 mt-5 mt-lg-0">
    
                            <div id="page-slider" class="page-slider small-bg">
    
                                <div class="item"
                                    style="background-image:url({{ asset('assets/images/slider-pages/slider_4.jpg') }})">
                                    <div class="container">
                                        <div class="box-slider-content">
                                            <div class="box-slider-text">
                                                <h2 class="box-slide-title">Taxes</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Item 1 end -->
    
                                <div class="item"
                                    style="background-image:url({{ asset('assets/images/slider-pages/slider_5.png') }})">
                                    <div class="container">
                                        <div class="box-slider-content">
                                            <div class="box-slider-text">
                                                <h2 class="box-slide-title">Auditor</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Item 1 end -->
    
    
                            </div>
    
    
                        </div>
                    </div>
                   
                </div>
            </div>
        </section><!-- Main container end -->



        @include('layouts.include.footer')


        @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
