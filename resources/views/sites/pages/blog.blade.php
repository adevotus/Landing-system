@include('assets.css')

<body>
    <div class="body-inner">

        @include('layouts.include.header')
        <!--/ Header end -->
        <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h2 class="banner-title">Blogs</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->

        <section id="main-container" class="main-container pb-2">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="#" class="latest-post-img">
                                    <img loading="lazy" class="img-fluid"
                                        src="{{ asset('public/images/' . $blog->blogImage) }}" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="{{ url('blogs/' . $blog->id) }}" class="d-inline-block">{{ $blog->blogTitle }}</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <p>Post date:
                                        <span class="post-item-date text-danger">
                                            <i class="fa fa-clock-o"></i> {{ $blog->publDate }}
                                        </span>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div><!-- Conatiner end -->
        </section><!-- Main container end -->

    @include('layouts.include.footer')


        @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
