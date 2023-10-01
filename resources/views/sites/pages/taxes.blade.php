@include('assets.css')

<body>
    <div class="body-inner">

        @include('layouts.include.header')

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

                            <h2 class="column-title mrt-0">Taxes</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-justify">Tax is one unavoidable facet of every business. To mitigate
                                        unnecessary losses related to tax and tax penalties, tax advice is very key in
                                        every step business set up and operation. When not well addressed, tax issues
                                        can pose significant risks to businesses.
                                        The tax and compliance environment are highly complex and an area that is
                                        governed by a web of growing and constantly changing legislation. </p>
                                    <p class="text-justify">As GSA Consulting we have strengthened our tax team in order
                                        to assist our clients with tax matters especially in the current environment
                                        where the Government has intensified tax compliance checks and tax collection
                                        measures.
                                        We also consider the importance of tax planning and services to companies to
                                        ensure the right and correct application of Tax laws.</p>
                                    <p class="text-justify">We support our clients in managing their tax risks and
                                        reduce their tax exposure. The practice is made up of tax and legal
                                        professionals and has experience of providing various tax services. These
                                        include tax planning and advisory, tax compliance and transfer pricing. We also
                                        provide tax training as well as helping businesses to set up in Tanzania.</p>
                                </div><!-- col end -->
                            </div><!-- 1st row end-->


                            <div class="row">
                                <div class="col-md-12">
                                    <p class="column-title-small" style="text-transform: lowercase;">Our tax consulting
                                        services cover the following aspects: –</p>


                                    <ul class="list-arrow">
                                        <li>Supporting clients on TRA audits, examinations, investigations and tax
                                            dispute resolution</li>
                                        <li>Responding to audit findings, objections and Appeals</li>
                                        <li>Transfer Pricing Documentation</li>
                                        <li>Transfer Pricing Audits.</li>
                                        <li>Advanced Pricing Arrangements (APAs) etc. </li>
                                        <li>
                                            Tax Health Checks </li>
                                        <li>Tax Compliance Services</li>
                                        <li> Filing of returns, tax computations etc. </li>
                                        <li>Tax Planning </li>
                                        <li>Tax Training </li>
                                        <li>Tax Advisory on various tax matters </li>
                                        <li>Tax Accounting -VAT, PAYE, Corporate tax, withholding taxes, imports and
                                            export taxes and other levies.</li>
                                        <li> Transaction advisory</li>
                                    </ul>
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
