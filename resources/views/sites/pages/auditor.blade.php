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
                            <h2 class="column-title mrt-0">Corporate Secretarial Services</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-justify">Our firm aims to be a regional service provider of
                                        secretarial compliance services. We can assist
                                        you in ensuring that you and your company are compliant with the provisions of
                                        the Companies
                                        Act to avoid possible enforcement action for non-compliance.
                                    </p>
                                    <p class="text-justify"></p>

                                    <h5>BRELA Correspondences</h5>
                                    <p class="text-justify">We interact with the Business Registrations and Licensing
                                        Authority (BRELA) on your behalf
                                        for all its main functions.</p>
                                    <h5>Company Registrations</h5>

                                    <p class="text-justify">
                                        We register companies on your behalf, including the completion, lodging and
                                        follow ups of all
                                        forms, compilation and submission of MEMATs, preparation of Share Certificates
                                        for the first
                                        allotment, an electronic company register and a permanent file for your company
                                        that is kept at
                                        our offices.</p>

                                    <h5>Annual Returns and Annual Duties</h5>
                                    <p class="text-justify">

                                        We do this directly online and provide this service on a once-off or yearly
                                        basis.</p>
                                    <h5>Deregistration</h5>
                                    <p class="text-justify">

                                        We are able to apply for deregistration on behalf of clients as well as
                                        deregister all statutory
                                        registrations that may be required of the company/close corporation
                                    </p>
                                    <h5>Reinstatements</h5>
                                    <p class="text-justify">
                                        We provide, request and submit all the necessary information and documentation
                                        on your behalf
                                        to reinstate your company or close corporation. We have been very successful in
                                        all our
                                        applications for reinstatements.</p>
                                </div><!-- col end -->
                            </div><!-- 1st row end-->

                            <h2 class="column-title mrt-0">Audit & Assurance</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-justify">We conduct audit engagements to examine our clients’
                                        financial statements and to evaluate the fairness of presentation of the
                                        statements in accordance with acceptable reporting frameworks including
                                        International Financial reporting Standards (IFRS) and International Public
                                        Sector Accounting Standards (IPSAS). We conduct a review of systems of internal
                                        controls and tests of transactions to the extent we believe necessary to provide
                                        and independent audit opinion in conformity with International
                                        Standards on Auditing (ISA) or International Standards of Supreme Audit
                                        Institution (ISSAI) for Government entities.</p>
                                    <p class="text-justify"></p>
                                </div><!-- col end -->
                            </div><!-- 1st row end-->


                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-transform: lowercase;">We also offer specialized audit services in
                                        procurement, investigations
                                        and forensic audits. The particular services falling under Audit Services in
                                        Tanzania include –</p>


                                    <ul class="list-arrow">
                                        <li>Financial statements audits </li>
                                        <li>Internal audit services </li>
                                        <li>Project/donor funded audits</li>
                                        <li>Transfer Pricing Audits.</li>
                                        <li>Government audits </li>
                                        <li>Projects development, Monitoring and Impact Assessment </li>
                                        <li>Procurement and Value for money audit</li>
                                        <li> Forensic audit services; and Audit review </li>

                                    </ul>
                                    <p class="text-justify">Our current and potential clients include large and small &
                                        medium-sized entities in the private and public sector. They include
                                        Hospitality, Health, Education institutions, construction companies, financial
                                        institutions; Non-Governmental Organisations (NGOs); companies in the mining
                                        industry; Government Agencies and Boards</p>
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
