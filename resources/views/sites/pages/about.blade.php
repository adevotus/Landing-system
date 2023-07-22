@include('assets.css')

<body>
    <div class="body-inner">

        @include('layouts.include.header')
        <!--/ Header end -->
        <div id="banner-area" class="banner-area">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title">About</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->

        <section id="ts-features" class="ts-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <!-- <h2 class="into-title">About Us</h2> -->
                            <h2 class="into-title" style="font-weight: 900; color: #144591;">We are here to manage your
                                books
                                with experience</h2>
                            <p class="text-justify">GSA Consulting is a professional service firm specialized in
                                accounting, tax and
                                consulting services to companies in diverse sectors in Tanzania. Being one of the
                                fast-growing
                                consulting firms, GSA Consulting team has wide experience in serving the business
                                community, government
                                and government agencies in East Africa, and targets to build a reputation of providing
                                first-class
                                professional services. The firm is a member of the Institute of Certified Public
                                Accountants of Tanzania
                                and has been approved and licensed to conduct professional accounting, auditing and
                                taxation services in
                                Tanzania.</p>
                            <p class="text-justify">The firm has ten professional staff. This number includes two
                                partners and two
                                directors. All our partners and directors have more than eight years of experience of
                                working with
                                either PKF East Africa, HLB International and also in various countries in East Africa
                                including
                                Tanzania and Rwanda. The international experience from our team is quite handy in
                                advising and
                                supporting our clients both locally and on global parameters. We pride ourselves in team
                                strength and
                                technology, these being
                                the two key components ensuring accuracy, timeliness and efficiency in our service
                                delivery.</p>
                        </div><!-- Intro box end -->

                        <div class="gap-20"></div>



                    </div><!-- Col end -->

                    <div class="col-lg-6">
                        <h2 class="into-title" style="font-weight: 900; color: #144591;">Firm Values</h2>
                        <!-- <hr style="background-color: #144591;"> -->
                        <p class="text-justify">As GSA Consulting we emphasize on technology and innovation, teamwork,
                            reliability,
                            communication, commitment, continuous development in business processes, professional
                            integrity in all our
                            conduct and total customer satisfaction.
                            We do not take kindly and deviations in quality as we strive to deliver beyond our clients’
                            expectations
                        </p>
                        <p class="text-justify">Our strength lies in technology integration and automation of every
                            aspect of our
                            services (Cloud Accounting systems, Cloud Payroll Systems, i-Tax systems and Cloud Audit
                            Systems) all
                            which ensure that we are in constant touch with our clients and our team members. This helps
                            us to stay in
                            touch with our clients, streamlined communication and efficiency that goes a long way to
                            manage quality
                            and time. In our view, each client is different and should be handled as such -there’s no
                            one approach for
                            all clients. We therefore take time to ensure we have in place client specific approach that
                            precisely attends to the client’s needs and provide particular and specific business
                            solutions.</p>
                        <div class="accordion accordion-group" id="our-values-accordion">
                            <div class="card">
                                <div class="card-header p-0 bg-transparent" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                            style="color: #144591;">
                                            Mission
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#our-values-accordion">
                                    <div class="card-body">
                                        Our mission is to be able to provide real business solutions to our clients in a
                                        timely manner and
                                        unmatched quality by utility of technology and maintenance of a competent team
                                        that understands and
                                        believes in our values.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0 bg-transparent" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo" style="color: #144591;">
                                            Vision
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#our-values-accordion">
                                    <div class="card-body">
                                        To be a world class firm providing first-class professional services locally and
                                        internationally
                                        supporting our clients through real, timely and quality business solutions.
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Integrity
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                  data-parent="#our-values-accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidata
                  </div>
                </div>
              </div> -->
                        </div>
                        <!--/ Accordion end -->

                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </section><!-- Feature are end -->



        @include('layouts.include.footer')


        @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
