<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <p class="info-text">Dar-es-salaam , Tanzania </p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="https://www.linkedin.com/in/gsa-consulting-4b5b45270">
                            <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                        </a>
                        <a title="Twitter" href="https://twitter.com/GSAConsultingTz">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Instagram" href="https://www.instagram.com/gsaconsultingtz/">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>

                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>

<header id="header" class="header-two"
    style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">

                        <div class="logo">
                            <a class="d-block" href="index.html">
                                <img loading="lazy" src="{{ asset('assets/images/logo.jpg') }}"
                                    width="500" style="width: 250px; height: 100px;" alt="gsa">
                            </a>
                        </div><!-- logo end -->

                        <button class="navbar-toggler" style="color: #144591; background-color: #144591;"
                            type="button" data-toggle="collapse" data-target=".navbar-collapse"
                            aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"
                                style="color: #144591; background-color: #144591;"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <li class="nav-item active" style="color:#144591">
                                    <a href="{{route('home')}}" class="nav-link active" style="color:#144591">Home </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('about_us')}}" class="nav-link">Abouts </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('services')}}" class="nav-link">Services </a>

                                </li>
                               

                                <li class="nav-item">
                                    <a href="{{route('blogSite')}}" class="nav-link">Blogs </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('publiSite')}}" class="nav-link">Publications </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('careers')}}" class="nav-link">careers </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{asset('contact_us')}}" class="nav-link">Contact </a>

                                </li>


                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
