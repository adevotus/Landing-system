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
                                <h1 class="banner-title">Careers</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Careers</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->

        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">

                    @include('sites.component.coreService')

                    <div class="col-xl-8 col-lg-8">
                        <div class="content-inner-page">

                            <div class="row">
                                <div class="col-md-12 mt-5 mt-md-0">

                                    <div class="accordion accordion-group accordion-classic"
                                        id="construction-accordion">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="column-title mrt-0" style="color: #144591;"><b>Job
                                                        Tittle:</b> Internship Program</h4>

                                            </div>

                                            <div class="collapse show">
                                                <div class="card-body">
                                                    <h5> Internship Program Details:</h5>
                                                    <ul>
                                                        <li>Duration: One year</li>
                                                        <li>Location: Dar Es Salaam, Tanzania</li>
                                                        <li> Start Date: 1st September 2023</li>
                                                        <li class="text-danger">Application Deadline: 18th August 2023</li>
                                                    </ul>

                                                    {{-- <span class="text-bold">Posted Date: <b
                                                            class="text-danger"></b></span> --}}
                                                    <p class="text-justify">
                                                        Who Are We Looking For:
                                                        We are searching for highly motivated graduates from reputable
                                                        universities with degrees in
                                                        the following fields:
                                                        <ul>
                                                            <li>
                                                                Accounting and Finance
                                                            </li>
                                                            <li>Taxation</li>
                                                            <li>Business Administration</li>
                                                            <li>Related fields</li>
                                                        </ul>
    

                                                    </p>
                                                    <h4> How to Apply:</h4>
                                                    <p>

                                                        If you are a recent graduate in one of the mentioned fields and
                                                        eager to embark on a
                                                        transformative internship journey, we encourage you to apply!
                                                        Please submit your application
                                                        to recruitments@gsaconsulting.co.tz with the subject line:
                                                        "Application for Internship
                                                        Program”.
                                                        Your application should include the following documents:
                                                    <ul>
                                                        <li>Updated resume showcasing your educational background,
                                                            skills,
                                                            and any relevant
                                                            experiences.</li>
                                                        <li>
                                                            A compelling cover letter expressing your interest in the
                                                            internship and your
                                                            aspirations for your career
                                                        </li>
                                                    </ul>

                                                    </p>
                                                    <p class="text-center">For more Details and job description Download
                                                        <a href="{{asset('assets/documents/Job Post-Internship Programm.pdf')}}"class="text-primary"><b>HERE</b></a> </p>
                        
                                                    <div class="row">
                                                     
                                                       
                                                    </div>

                                                </div>
                                            </div>
                                        </div>





                                    </div>
                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->


                        </div><!-- Content inner end -->
                    </div><!-- Content Col end -->


                </div><!-- Main row end -->
            </div><!-- Conatiner end -->
        </section><!-- Main container end -->

        @include('layouts.include.footer')


        @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
