@include('assets.css')

<body>
    <div class="body-inner">

        {{-- top bar and header  --}}
       @include('layouts.include.header')

        <div class="banner-carousel banner-carousel-2 mb-0">
            <div class="banner-carousel-item"
                style="background-image:url({{ asset('assets/images/bg_1_edited.png') }});position:relative; background-repeat: no-repeat;">
                <div class="container">
                    <div class="box-slider-content">
                        <div class="box-slider-text" style="background-color: #144591; opacity:0.9">
                            <h2 class="box-slide-title">We provide Excellence In</h2>
                            <h3 class="box-slide-sub-title"> deliver Enduring Result</h3>
                            <p class="box-slide-description">We believe in providing good consulting in Taxes ,Auditing
                                and Advisory.</p>
                            <p>
                                <a href="service_gsa.html" class="slider btn bg-white text-dark"
                                    style="color: #144591">Our Service</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- workplace-team-cooperation-businesswoman-laptop-office.jpg -->

            <div class="banner-carousel-item"
                style="background-image:url({{ asset('assets/images/slider-pages/slider_2.jpg') }})">
                <div class="slider-content text-left">
                    <div class="container">
                        <div class="box-slider-content">
                            <div class="box-slider-text" style="background-color: #144591; opacity:0.9">
                                <h2 class="box-slide-title">We provide Excellence In</h2>
                                <h3 class="box-slide-sub-title">deliver Enduring Result</h3>
                                <p class="box-slide-description">We believe in providing good consulting in Taxes
                                    ,Auditing and Advisory.</p>
                                <p>
                                    <a href="{{route('services')}}" class="slider btn bg-white text-dark"
                                        style="color: #144591">Our Service</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="call-to-action no-padding" style="background-color: #144591;">
            <div class="container">
                <div class="action-style-box">
                    <div class="row">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">Looking for a First-Class Business Consultant?</h3>
                            </div>
                        </div><!-- Col end -->
                        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn">
                                <a class="btn btn-primary" style="background-color: #ebebeb; color: #144591;"
                                    href="{{route('contact_us')}}">Contact us</a>
                            </div>
                        </div><!-- col end -->
                    </div><!-- row end -->
                </div><!-- Action style box -->
            </div><!-- Container end -->
        </section><!-- Action end -->
        <section id="ts-features" class="ts-features pb-2">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-4 col-md-6 mb-5">
                            <div class="p-2" style="box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;">
                                <div class="ts-service-box" >
                                    <div class="ts-service-image-wrapper">
                                        <img loading="lazy" class="w-50 ml-5"
                                            src="{{ asset('assets/images/icon-image/tax-payment.png') }}" width="40"
                                            alt="service-image">
        
                                    </div>
                                    <div class="d-flex">
                                        <div class="ts-service-box-img">
                                            <!--                    <img loading="lazy" src="images/icon-image/tax-payment.png" width="60" height="70" alt="service-icon" />-->
                                        </div>
                                        <div class="ts-service-info">
                                            <h3 class="service-box-title" style="color: #144591; font-weight: bold;"><a
                                                    href="{{route('taxes')}}">Tax</a></h3>
                                            <p class="text-justify">Tax advice is very key in every step business set up and
                                                operation. We manage tax risks for our clients</p>
                                            <a class="learn-more d-inline-block" href="{{route('taxes')}}"
                                                aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       <!-- Service1 end -->
                    </div><!-- Col 1 end -->

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="p-2" style="box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper">
                                    <img loading="lazy" class="w-50 ml-5"
                                        src="{{ asset('assets/images/icon-image/survey.png') }}" width="40"
                                        alt="service-image">
                                </div>
                                <div class="d-flex">
                                    <div class="ts-service-box-img">
    
                                        <!--                    <img loading="lazy" src="images/icon-image/survey.png" height="70" width="60" alt="service-icon" style="font-size: 10px"/>-->
                                    </div>
                                    <div class="ts-service-info">
                                        <h3 class="service-box-title"><a href="{{route('auditor')}}">Audit & Assurance</a></h3>
                                        <p class="text-justify">We offer specialized audit services in procurement,
                                            investigations and forensic audits</p>
                                        <a class="learn-more d-inline-block" href="{{route('auditor')}}"
                                            aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service2 end -->
                    </div><!-- Col 2 end -->

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="p-2" style="box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper">
                                    <img loading="lazy" class="w-50 ml-5"
                                        src="{{ asset('assets/images/icon-image/discussion.png') }}" width="30"
                                        alt="service-image">
                                </div>
                                <div class="d-flex">
                                    <div class="ts-service-box-img">
                                        <!--                    <img loading="lazy" src="images/icon-image/discussion.png" width="60" height="70" alt="service-icon" />-->
                                    </div>
                                    <div class="ts-service-info">
                                        <h3 class="service-box-title"><a href="{{route('advisory')}}">Advisory</a></h3>
                                        <p class="text-justify">We provide businesses with corporate finance advice and
                                            support across a range of issues.</p>
                                        <a class="learn-more d-inline-block" href="{{route('advisory')}}"
                                            aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                                    </div>
                                </div>
                            </div><!-- Service3 end -->
                        </div>
            
                       
                    </div><!-- Col 3 end -->
                </div><!-- Content row end -->
            </div><!-- Container end -->
        </section><!-- Feature are end -->

        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-title">We are here to manage your books
                            with experience</h2>
                        <h3 class="section-sub-title" style="color: #144591">Who We Are</h3>

                        <p class="text-justify">We conduct audit engagements to examine our clients’ financial
                            statements and to evaluate the fairness of presentation of the statements</p>
                        <p class="text-justify">We provide businesses with corporate finance advice and support across
                            a range of issues,
                            drawing on the resources, expertise and experience across the borders, We support our
                            clients in managing their tax risks and reduce their tax exposure.</p>
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" style="background-color: #ebebeb; color: #144591;"
                                href="{{route('about_us')}}">About us <i class="fa fa-arrow-right ml-3"
                                    aria-hidden="true"></i></a>
                        </div>

                    </div><!-- Col end -->

                    <div class="col-lg-6 mt-5 mt-lg-0">

                        <div id="page-slider" class="page-slider small-bg">

                            <div class="item"
                                style="background-image:url({{ asset('assets/images/items/item_2.jpeg') }})">
                                <div class="container">
                                    <div class="box-slider-content">
                                        <div class="box-slider-text">
                                            <h2 class="box-slide-title">Taxes</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Item 1 end -->

                            <div class="item"
                                style="background-image:url({{ asset('assets/images/items/item_6.jpeg') }})">
                                <div class="container">
                                    <div class="box-slider-content">
                                        <div class="box-slider-text">
                                            <h2 class="box-slide-title">Auditor</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Item 1 end -->


                        </div><!-- Page slider end-->


                    </div><!-- Col end -->
                </div><!-- Content row end -->

            </div><!-- Container end -->
        </section><!-- Main container end -->

        <section id="ts-service-area" class="ts-service-area pb-0">
            <div class="container">
                <div class="row text-md-left">
                    <div class="col-md-12">
                        <!--                      <h2 class="section-title">We Are Specialists In</h2>-->
                        <h3 class="section-sub-title">Our Firms </h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/value.png') }}" width="30"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Our Values</a></h3>
                                <p class="text-justify">As GSA Consulting we emphasize on technology and innovation,
                                    teamwork, reliability, communication, commitment, continuous development in business
                                    processes, professional integrity in all our conduct and total customer satisfaction
                                </p>
                            </div>
                        </div><!-- Service 1 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/bullseye.png') }}" width="30"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Our missions</a></h3>
                                <p class="text-justify">

                                    Our mission is to be able to provide real business solutions to our clients in a
                                    timely manner and unmatched quality by utility of technology and maintenance of a
                                    competent team that understands and believes in our values.
                                </p>
                            </div>
                        </div><!-- Service 2 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/target.png') }}" width="30"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Our Vision</a></h3>
                                <p class="text-justify">To be a world class firm providing first-class professional
                                    services locally and internationally supporting our clients through real, timely and
                                    quality business solutions.</p>
                            </div>
                        </div><!-- Service 5 end -->

                    </div><!-- Col end -->

                    <div class="col-lg-6 text-center">
                        <div id="page-slider" class="page-slider small-bg" style="margin-bottom: 20px;">
                            <!-- workplace-team-cooperation-businesswoman-laptop-office.jpg -->
                            <div class="item"
                                style="background-image:url({{ asset('assets/images/items/item_4.jpeg') }})">
                                <div class="container">
                                    <div class="">
                                        <div class="text-center mt-4 p-5"
                                            style="background-color: #144591; opacity: 0.7;">
                                            <h3 class="text-center text-white">Performance</h3>

                                            <p class="text-justify text-white">We emphasize on meeting the unique needs of our clients on a one-to-one basis. To us, every client is special and we lay down a special approach to meeting their needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img loading="lazy" class="img-fluid" src="images/slider-pages/workplace-team-cooperation-businesswoman-laptop-office.jpg" width="500" alt="service-avater-image"> -->
                    </div><!-- Col end -->




                </div><!-- Col end -->
            </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
    </section>

    <section id="facts" class="facts-area dark-bg" style="background-color: #144591;">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <i class="fa fa-home" aria-hidden="true" style="color: #fff; font-size: 45px;"></i>
                            <!-- <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img"> -->
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$totalClient}}">0</span></h2>
                            <h3 class="ts-facts-title" style="color: #fff;">Total Clients</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <i class="fa fa-book" aria-hidden="true" style="color: #fff; font-size: 45px;"></i>
                            <!-- <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img"> -->
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$totalPublications}}">0</span></h2>
                            <h3 class="ts-facts-title" style="color: #fff;">Publications</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <i class="fa fa-comments" aria-hidden="true" style="color: #fff; font-size: 45px;"></i>
                            <!-- <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img"> -->
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$totalFeedback}}">0</span></h2>
                            <h3 class="ts-facts-title" style="color: #fff;">Reviews</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <i class="fa fa-eye" aria-hidden="true" style="color: #fff; font-size: 45px;"></i>
                            <!-- <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img"> -->
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$totalFeedback}}">0</span></h2>
                            <h3 class="ts-facts-title" style="color: #fff;">visitors</h3>
                        </div>
                    </div>



                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>

    </section>



    @include('layouts.include.news')

    @include('layouts.include.footer')

    @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
