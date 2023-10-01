{{-- <section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="section-sub-title">Testimonials </h3>


                <div id="testimonial-slide" class="testimonial-slide">
                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                Question ran over her cheek When she reached the first hills of the Italic
                                Mountains, she had a last
                                view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                Village and the
                                subline of her own road.
                            </span>

                            <div class="quote-item-footer text-center">

                                <div class="quote-item-info">
                                    <h3 class="quote-author">Gabriel Denis</h3>
                                    <span class="quote-subtext">Chairman, OKT</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                done idunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion
                                ullamco laboris
                                nisi aliquip consequat.
                            </span>

                            <div class="quote-item-footer text-center">

                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                    <span class="quote-subtext">CFO, First Choice</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                done idunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion
                                ullamco laboris
                                nisi ut commodo consequat.
                            </span>

                            <div class="quote-item-footer text-center">
                                
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Minter Puchan</h3>
                                    <span class="quote-subtext">Director, AKT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">

                <h3 class="section-sub-title"> Happy Clients</h3>


                <div class="row all-clients">
                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client1.png"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div>

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client2.png"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div>

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client3.png"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div>

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client4.png"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div> 

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client5.png"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div>

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client6.png"
                                    alt="clients-logo" /></a>
                        </figure>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section> --}}

<section id="news" class="news">
    <div class="container">
        <div class="row text-left">
            <div class="col-12">
                <h2 class="section-title">News and Updates</h2>
                <h3 class="section-sub-title">Recent News</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 mb-4 py-3 m-0"
                    style="">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="#" class="latest-post-img">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset('public/images/' . $blog->blogImage) }}" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="{{ url('blogs/' . $blog->slug) }}"
                                    class="d-inline-block">{{ $blog->blogTitle }}</a>
                            </h4>
                            <div class="latest-post-meta">
                                <p>Post date:
                                    <span class="post-item-date text-danger">
                                        <i class="fa fa-clock-o"></i> {{ $blog->publDate }}
                                    </span>
                                </p>

                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary text-center " href="{{ url('blogs/' . $blog->slug) }}"
                                    style="background-color: #144591; text-align:center;">
                                    Read more 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="{{ route('blogSite') }}" style="background-color: #144591;">See All
                Posts</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
