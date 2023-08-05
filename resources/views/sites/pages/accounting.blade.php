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
                                <h1 class="banner-title">Service</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Services</a></li>
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

                            <h2 class="column-title mrt-0">Accounting and Book keeping Services
                            </h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-justify">We utilize modern cloud accounting systems in maintaining
                                        books of accounts and records for
                                        our clients. Poor record keeping and accounting is many at times the main cause
                                        of
                                        unmonitored compliance which leads to penalties burden which are otherwise
                                        avoidable. Our
                                        believe is that an efficient record management and accounting system enables the
                                        management
                                        not only to monitor business performance and key business processes timely but
                                        also helps in
                                        managing compliance and in overall enhance a favorable compliance environment
                                        for an
                                        organization</p>
                                    <p class="text-justify"></p>
                                </div><!-- col end -->
                            </div><!-- 1st row end-->


                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Assistance to bookkeepers
                                    </h5>
                                    <p style="text-transform: lowercase;">If you employ a bookkeeper, we can assist you
                                        in evaluating and managing this task
                                        effectively. This will improve your financial reporting and limit the risk of
                                        non-compliance.
                                    </p>

                                    <h5>Processing
                                    </h5>
                                    <p style="text-transform: lowercase;">We use Cloud QuickBooks Accounting System for outsourced processing and bookkeeping. 
                                        We can assist you in keeping all your accounting records up to date.
                                       
                                    </p>
                                    <h5>Annual financial statements

                                    </h5>
                                    <p style="text-transform: lowercase;">We compile financial statements for your business, ensuring that your financials are in 
                                        accordance with International Framework and Reporting Standards (IFRS) for SMEs or any 
                                        other relevant reporting framework.
                                    </p>

                                    <h5>Management accounts

                                    </h5>
                                    <p style="text-transform: lowercase;">We offer monthly or bi-monthly balance sheets, income statement comparisons, customised 
                                        reports depending on management needs, and detailed VAT reports.
                                        
                                    </p>
                                    <h5>Financial management
                                    </h5>
                                    <p style="text-transform: lowercase;">We help you to understand your financial results, pointing out risk and potential, so you get a 
                                        deeper insight into your business.
                                    </p>
                                    



                                </div>

                            </div>

                            
                            <div class="row">
                                <div class="col-md-12 mt-5 mt-md-0">
                                    <h3 class="column-title-small" style="color: #144591;">Our Key Services include</h3>

                                    <div class="accordion accordion-group accordion-classic"
                                        id="construction-accordion">
                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne"
                                                        style="text-transform:lowercase;">
                                                        Payroll Management Services</button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify"> We aim to minimize our clients’ payroll administration process by offering a fully managed payroll 
                                                        service compliant with the Income Tax Act, Pension Contribution Regulations, National Training Levy 
                                                        deductions, Workers Compensation Act and the Labour regulations.
                                                        </p>


                                                    <p class="text-justify">Our payroll Services include the following:</p>
                                                    <ul class="list-arrow">
                                                        <li>Maintaining the details of a company’s employees
                                                        </li>
                                                        <li> Preparing tax returns

                                                        </li>
                                                        <li>Consulting on taxation issues regarding expatriate employees
                                                        </li>
                                                        <li> Assisting in obtaining work and residence permits</li>
                                                        <li>Liaising with the income tax authorities and the Department of Social Security
                                                        </li>
                                                        <li>Preparation of the ‘Statement of Emoluments and</li>
                                                        <li>SDL contributions computation and filing</li>
                                                        <li>Preparation and submission 15 of P.A.Y.E. return</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                      

                                        


                                    </div>
                                    <!--/ Accordion end -->
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class="gap-40"></div>

                            <div class="call-to-action classic">
                                <div class="row align-items-center">
                                    <div class="col-md-8 text-center text-md-left">
                                        <div class="call-to-action-text">
                                            <h3 class="action-title">Interested with this service.</h3>
                                        </div>
                                    </div><!-- Col end -->
                                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                        <div class="call-to-action-btn">
                                            <a class="btn btn-primary"
                                                style="background-color: #ebebeb; color: #144591;"
                                                href="contact.html">Contact us</a>
                                        </div>
                                    </div><!-- col end -->
                                </div><!-- row end -->
                            </div><!-- Action end -->

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
