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

          <h2 class="column-title mrt-0">Advisory</h2>

          <div class="row">
            <div class="col-md-12">
              <p class="text-justify">We provide advice to our clients on various matters that may potentially affect their operations performance by conducting a thorough assessment of internal resources and capabilities as well as external environment. Results of our assessment are matched with the vision and mission of our clients as well as their strategic plan in place. We then support our clients to develop appropriate strategic plans after identifying critical areas of their businesses. In present times, the key goal in our advisory is on how to support each client we interface
                 with to automate every aspect of their operations and systems and the best way we can support each step of it</p>
              <p class="text-justify"></p>
            </div><!-- col end -->
          </div><!-- 1st row end-->


          <div class="row">
            <div class="col-md-12">
              <p style="text-transform: lowercase;">Every business deal brings a specific set of challenges requiring specialist knowledge and experience. 
                We provide businesses with corporate finance advice and support across a range of issues, drawing on the resources, expertise and experience across the borders. The particular advisory services provided include:</p>

              
              <ul class="list-arrow">
                <li>Business transformation  </li>
                <li>Management consulting  </li>
                <li>Corporate consulting </li>
                <li>Finance & Accounting consulting .</li>
                <li>HR & Payroll management   </li>
                <li>IT consulting  </li>
                    <li> Due Diligence (Financial & Tax) </li>
                    <li>Training e.g. IFRS & IPSAS, Tax, Risk Management, ICT, Leadership & Strategy, Human Resource etc.  </li>
                    <li>Corporate recoveries </li>
                    <li>Fixed Assets Management </li>
                    <li>Accounting models, policy manuals and systems development</li>
                 
              </ul>
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
                                    CFO Outsourcing Services </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#construction-accordion">
                            <div class="card-body">
                                <p class="text-justify">Our Outsourced COF Services offer support that will ensure the improvement of the accounting 
                                  efficiencies, the refinery tax strategies, and conquest of the financial challenges in order to keep 
                                  moving forward. We will help your business to implement strong accounting and tax practices 
                                  that will streamline your finances and improve business performance.
                                  </p>


                                <p class="text-justify">We support our clients in managing their tax
                                    risks and reduce their tax exposure. The practice
                                    is made up of tax and legal professionals and has experience of
                                    providing various tax services.
                                    These include tax planning and advisory, tax compliance and
                                    transfer pricing. We also provide
                                    tax training as well as helping businesses to set up in
                                    Tanzania.</p>
                                <ul class="list-arrow">
                                    <li> Interim CFO or Controller</li>
                                    <li> Part-time CFO services
                                    </li>
                                    <li> Business improvement strategies
                                    </li>
                                    <li> Strategic business planning
                                      .</li>
                                    <li> Financial analysis and reporting
                                    </li>
                                    <li> Cash flow management</li>
                                    <li> Tax planning to maximize profits</li>
                                    <li> Training for in-house accountants and bookkeepers
                                    </li>
                                    <li>Risk management
                                    </li>
                                    <li>Due diligence</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"
                                    style="text-transform: lowercase;">
                                    Information and technology management Services
                                  </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#construction-accordion">
                            <div class="card-body">
                                <p class="text-justify">
                                  Organizations that manipulate and use IT as a part of their long-term thinking are achieving, maintaining 
                                  competitive advantage in this global marketplace. Computer is just one component of an IS and it along 
                                  with other related technologies has allowed us to obtain or collect data, process data, and deliver 
                                  information (reports) more rapidly and reliably. We live in an era of constant change and, therefore, 
                                  must prepare ourselves to cope with it.
                                </p>
                                <h4 style="text-transform: lowercase;"> GSA Consulting provides following general software solutions for its clients including;
                                </h4>
                              <ul class="list-arrow">
                                  <li>IT Audit</li>
                                  <li>Preparation of user requirement specifications and feasibility studies</li>
                                  <li>Defining computer hardware and software requirements</li>
                                  <li>Business process redesign and reengineering</li>
                                  <li>Systems analysis, evaluation and design</li>
                                  <li>Information systems strategies</li>
                                  <li>Computerization of accounting departments</li>
                                  <li>Preparation of the ‘Statement of Emoluments and</li>
                                  <li>Training in the use of computers, accounting packages and other techniques</li>


                              
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
                  <a class="btn btn-primary" style="background-color: #ebebeb; color: #144591;" href="contact.html">Contact us</a>
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


  <!-- Javascript Files
  ================================================== -->


  </div><!-- Body inner end -->
  </body>

  </html>