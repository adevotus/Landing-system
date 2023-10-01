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
                                <h1 class="banner-title">Blog</h1>

                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->


        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="post-content post-single">
                            <div class="post-media post-image">
                                <img loading="lazy" src="{{ asset('public/images/' . $blog->blogImage) }}" class="img-fluid" alt="post-image">
                            </div>
                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <span class="post-author">
                                            <i class="far fa-user"></i><a href="#"> Admin</a>
                                        </span>
                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i><a href="#"> News</a>
                                        </span>
                                        <span class="post-meta-date"><i class="far fa-calendar"></i> {{ $blog->publDate }}</span>
                                    </div>
                                    <h2 class="entry-title">
                                        {{ $blog->blogTitle }}
                                    </h2>
                                </div><!-- header end -->
        
                                <div class="entry-content text-justify">
                                    <p>{{ $blog->initalDescr }}</p>
                                </div>
                                <div class="entry-content text-justify">
                                    <p>{{ $blog->moreDescr }}</p>
                                </div>
        
                                <div class="tags-area d-flex align-items-center justify-content-between">
                                    <div class="post-tags">
                                        <!-- Add your tags here if needed -->
                                    </div>
                                    <div class="share-items">
                                        <ul class="post-social-icons list-unstyled">
                                            <li class="social-icons-head">Share:</li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
        
                            </div><!-- post-body end -->
                        </div><!-- post content end -->
                    </div><!-- Content Col end -->
        
                    <div class="col-lg-4">
                        <div class="sidebar sidebar-right">
                            <div class="widget recent-posts">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="list-unstyled">
                                    @foreach ($blogs as $blog)
                                        <li class="d-flex align-items-center">
                                            <div class="posts-thumb">
                                                <a href="#"><img loading="lazy" alt="img" src="{{ asset('public/images/' . $blog->blogImage) }}"></a>
                                            </div>
                                            <div class="post-info">
                                                <h4 class="entry-title">
                                                    <a href="{{ url('blogs/' . $blog->id) }}">{{ $blog->blogTitle }}</a>
                                                </h4>
                                                <span>Posted Date: <b class="text-danger">{{$blog->publDate}}</b></span>
                                            </div>
                                        </li><!-- 1st post end-->
                                    @endforeach
                                </ul>
                            </div><!-- Recent post end -->
                        </div><!-- Sidebar end -->
                    </div><!-- Sidebar Col end -->
                </div><!-- Main row end -->
            </div><!-- Container end -->
        </section><!-- Main container end -->
        

        @include('layouts.include.footer')



        <!-- Javascript Files
  ================================================== -->

        @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
