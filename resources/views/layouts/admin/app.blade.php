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
                        <h1>Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total School</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $totalStaffs }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Parents</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $totalBlogs }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-warning">
                                    <i class="far fa-file"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>publications</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $totalPublications }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Reviews</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $totalClients }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-7">
                            <div class="card">
                              <div class="card-header">
                                <h4>Feedback From contact</h4>
                              </div>
                              <div class="card-body">
                                <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                                    @foreach ($feedbacks as $feedback )
                                  <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="70" src="{{asset('admin/assets/img/avatar/avatar-1.png')}}">
                                    <div class="media-body">
                                      <div class="media-title mb-1" style="font-weight: 700">{{$feedback->name}} , {{$feedback->email}}</div>
                                      <div class="media-left"><div class="text-primary" style="font-weight: 800;">{{$feedback->subject}}</div></div>
                                      <div class="media-description text-muted text-justify">{{$feedback->message}}</div>
                                      
                                    </div>
                                  </li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                            @foreach ($blogs as $blog)
                            <article class="article article-style-b">
                              <div class="article-header">
                                <div class="article-image" data-background="{{ asset('public/images/' . $blog->blogImage) }}">
                                </div>
                              </div>
                              <div class="article-details">
                                <div class="article-title">
                                  <h2><a href="#">{{ $blog->blogTitle }}</a></h2>
                                </div>
                                <p class="text-justify">{{ $blog->initalDescr }}</p>
                                <div class="article-cta">
                                  {{-- <a href="#">Read More <i class="fas fa-chevron-right"></i></a> --}}
                                </div>
                              </div>
                            </article>
                            @endforeach
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
