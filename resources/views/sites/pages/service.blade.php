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

                            <h2 class="column-title mrt-0" style="color: #144591;">What we offer</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-justify">We emphasize on meeting the unique needs of our clients on a
                                        one-to-one basis. To us, every
                                        client is special and we lay down a special approach to meeting their needs. We
                                        are accessible,
                                        flexible, and personal, and we make your business our business. We are dedicated
                                        to
                                        professionalism, integrity and clients’ satisfaction. Further, we focus on
                                        utilizing technology to
                                        increase efficiency and streamline communication and stay in touch with our
                                        clients and teams.</p>

                                </div><!-- col end -->
                            </div><!-- 1st row end-->



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
                                                        Direct and indirect taxes management </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify"> Tax is one unavoidable facet of every
                                                        business. To mitigate unnecessary losses related to tax
                                                        and tax penalties, tax advice is very key in every step business
                                                        set up and operation. When not
                                                        well addressed, tax issues can pose significant risks to
                                                        businesses. The tax and compliance
                                                        environment are highly complex and an area that is governed by a
                                                        web of growing and
                                                        constantly changing legislation. As GSA we have strengthened our
                                                        tax team in order to assist
                                                        our clients with tax matters especially in the current
                                                        environment where the Government has
                                                        intensified tax compliance checks and tax collection measures.
                                                        We also consider the
                                                        importance of tax planning and services to companies to ensure
                                                        the right and correct application
                                                        of Tax laws</p>


                                                    <p class="text-justify">We support our clients in managing their tax
                                                        risks and reduce their tax exposure. The practice
                                                        is made up of tax and legal professionals and has experience of
                                                        providing various tax services.
                                                        These include tax planning and advisory, tax compliance and
                                                        transfer pricing. We also provide
                                                        tax training as well as helping businesses to set up in
                                                        Tanzania.</p>
                                                    <ul class="list-arrow">
                                                        <li>Responding to audit findings, objections and Appeals.</li>
                                                        <li>Transfer Pricing Documentation.</li>
                                                        <li>Transfer Pricing Audits.</li>
                                                        <li>Advanced Pricing Arrangements (APAs).</li>
                                                        <li> Tax Health Checks.</li>
                                                        <li>Tax Compliance Services.</li>

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
                                                        Accounting and Book keeping Services
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        We utilize modern cloud accounting systems in maintaining books
                                                        of accounts and records for
                                                        our clients. Poor record keeping and accounting is many at times
                                                        the main cause of
                                                        unmonitored compliance which leads to penalties burden which are
                                                        otherwise avoidable. Our
                                                        believe is that an efficient record management and accounting
                                                        system enables the management
                                                        not only to monitor business performance and key business
                                                        processes timely but also helps in
                                                        managing compliance and in overall enhance a favorable
                                                        compliance environment for an
                                                        organization.
                                                    </p>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree"
                                                        style="text-transform: lowercase;">
                                                        Payroll Management Services
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        We aim to minimize our clients’ payroll administration process
                                                        by offering a fully managed payroll
                                                        service compliant with the Income Tax Act, Pension Contribution
                                                        Regulations, National Training Levy
                                                        deductions, Workers Compensation Act and the Labour regulations.
                                                    </p>
                                                    <h4 style="text-transform: lowercase;">Our payroll Services include
                                                        the following:</h4>
                                                    <ul class="list-arrow">
                                                        <li> Maintaining the details of a company’s employees</li>
                                                        <li>Calculating and making payments and deductions to the
                                                            employees and the Authorities</li>
                                                        <li>Preparing tax returns</li>
                                                        <li>Keeping up-to-date with regulations and guidelines affecting
                                                            expatriate employees</li>
                                                        <li> Consulting on taxation issues regarding expatriate
                                                            employees</li>
                                                        <li>Assisting in obtaining work and residence permits</li>
                                                        <li> Liaising with the income tax authorities and the Department
                                                            of Social Security</li>
                                                        <li>Preparation of the ‘Statement of Emoluments and</li>
                                                        <li> SDL contributions computation and filing</li>

                                                        <li> Preparation and submission 15 of P.A.Y.E. return</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour"
                                                        style="text-transform: lowercase;">
                                                        Business Advisory Services
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        We provide advice to our clients on various matters that may
                                                        potentially affect their operations
                                                        performance by conducting a thorough assessment of internal
                                                        resources and capabilities as well
                                                        as external environment. Results of our assessment are matched
                                                        with the vision and mission of
                                                        our clients as well as their strategic plan in place. We then
                                                        support our clients to develop
                                                        appropriate strategic plans after identifying critical areas of
                                                        their businesses. In present times,
                                                        the key goal in our advisory is on how to support each client we
                                                        interface with to automate
                                                        every aspect of their operations and systems and the best way we
                                                        can support each step of it
                                                    </p>
                                                    <p class="text-justify">Every business deal brings a specific set of
                                                        challenges requiring specialist knowledge and
                                                        experience. We provide businesses with corporate finance advice
                                                        and support across a range
                                                        of issues, drawing on the resources, expertise and experience
                                                        across the borders.</p>


                                                    <ul class="list-arrow">

                                                        <li> Business transformation
                                                        </li>
                                                        <li>Management consulting</li>
                                                        <li>Finance & Accounting consulting</li>
                                                        <li>HR & Payroll management</li>
                                                        <li> IT consulting</li>
                                                        <li>Due Diligence (Financial & Tax)</li>


                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFiver"
                                                        style="text-transform: lowercase;">
                                                        Corporate Secretarial Services
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        Our firm aims to be a regional service provider of secretarial
                                                        compliance services. We can assist
                                                        you in ensuring that you and your company are compliant with the
                                                        provisions of the Companies
                                                        Act to avoid possible enforcement action for non-compliance.

                                                    </p>



                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapsesix"
                                                        aria-expanded="false" aria-controls="collapsesix"
                                                        style="text-transform: lowercase;">
                                                        Board Evaluation, Governance and Secretarial Audits
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapsesix" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        In recent years, due to a number of high-profile corporate
                                                        failures, directors and managers have
                                                        come under greater scrutiny for the manner in which their
                                                        companies are governed and are
                                                        expected to promote and demonstrate a greater degree of
                                                        competence and accountability

                                                    </p>
                                                    <p class="text-justify">
                                                    <h5> Governance and Secretarial Audit</h5>

                                                    Good corporate governance provides proper incentives for the board
                                                    and management to pursue
                                                    objectives that are in the interests of the company and its
                                                    shareholders and facilitate effective
                                                    monitoring.
                                                    We conduct annual internal secretarial and governance audit to
                                                    assure the regulator, generate
                                                    confidence amongst the shareholders, the creditors and other
                                                    stakeholders in companies, assure
                                                    and instill self-regulation and professional discipline in
                                                    companies. These are tools of risk
                                                    mitigation and allow organizations to effectively address compliance
                                                    risk issues. It helps the
                                                    companies to build their corporate image.
                                                    </p>

                                                    <p class="text-justify">
                                                    <h5>Board Evaluations</h5>

                                                    We conduct periodic internal Board Evaluations and issue Board
                                                    evaluation reports with as
                                                    evidence that Board the members have effectively applied their
                                                    stewardship agenda and
                                                    determine presence of

                                                    <ul class="list-arrow">
                                                        <li>Entrepreneurial and ethical leadership</li>
                                                        <li> Strategic aims and optimal resource allocation</li>

                                                        <li>Review management performance</li>
                                                        <li>Review set values and standards in Meeting obligations to
                                                            shareholders</li>



                                                    </ul>
                                                    </p>
                                                   

                                                    <p>
                                                    <h5>Facilitating Company Meetings</h5>

                                                    We facilitate preparation, planning, attendance, documentation and
                                                    custody of all company
                                                    meeting records/minutes. We ensure;

                                                    <ul>
                                                        <li> Statutory meeting is held within the regulatory timelines.
                                                        </li>
                                                        <li>All meeting resolutions are adequately and clearly
                                                            documented.</li>
                                                        <li>Notices for statutory meeting are issued within the
                                                            statutory timelines.</li>
                                                        <li>Facilitate selection and preparation of meeting venue.</li>
                                                        <li>Ensure statutory items of agenda are clearly included in all
                                                            statutory meeting.</li>
                                                        <li>Conducting Board Evaluations</li>
                                                    </ul>
                                                    </p>




                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFiver"
                                                        style="text-transform: lowercase;">
                                                        CFO Outsourcing Service
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        Our Outsourced COF Services offer support that will ensure the improvement of the accounting
                                                        efficiencies, the refinery tax strategies, and conquest of the financial challenges in order to keep
                                                        moving forward. We will help your business to implement strong accounting and tax practices
                                                        that will streamline your finances and improve business performance
                                                       
                                                        <h5> The outsourced CFO Services include the following:</h5>

                                                        <ul>
                                                            <li>Interim CFO or Controller</li>
                                                            <li>Part-time CFO services</li>
                                                            <li>Business improvement strategies</li>
                                                            <li>Strategic business planning</li>
                                                            <li>Financial analysis and reporting</li>
                                                            <li>Cash flow management</li>
                                                            <li>Tax planning to maximize profits</li>
                                                            <li>Training for in-house accountants and bookkeepers</li>
                                                            <li>Risk management</li>
                                                            <li> Due diligence</li>
                                                        </ul>

                                                    </p>




                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseServen"
                                                        aria-expanded="false" aria-controls="collapseServen"
                                                        style="text-transform: lowercase;">
                                                        Information and technology management Services
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseServen" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#construction-accordion">
                                                <div class="card-body">
                                                    <p class="text-justify">
                                                        Organizations that manipulate and use IT as a part of their long-term thinking are achieving, maintaining
                                                        competitive advantage in this global marketplace. Computer is just one component of an IS and it along
                                                        with other related technologies has allowed us to obtain or collect data, process data, and deliver
                                                        information (reports) more rapidly and reliably. We live in an era of constant change and, therefore,
                                                        must prepare ourselves to cope with it.
                                                       
                                                        <h5> GSA Consulting provides following general software solutions for its clients including:</h5>

                                                        <ul>
                                                            <li>IT Audit</li>
                                                            <li>Preparation of user requirement specifications and feasibility studies</li>
                                                            <li>Defining computer hardware and software requirements</li>
                                                            <li>Business process redesign and reengineering</li>
                                                            <li>Systems analysis, evaluation and design</li>
                                                            <li>nformation systems strategies</li>
                                                            <li>Computerization of accounting departments</li>
                                                            <li>Training in the use of computers, accounting packages and other techniques</li>
                                                            
                                                        </ul>

                                                    </p>




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