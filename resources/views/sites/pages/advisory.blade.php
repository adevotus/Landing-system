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