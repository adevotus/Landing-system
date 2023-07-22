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
                                <h1 class="banner-title">Contact</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Company</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title">Reaching our Office</h2>
                        <!-- <h3 class="section-sub-title">Find Our Location</h3> -->
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fas fa-map-marker-alt mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4>Visit Our Office</h4>

                                <p>Derm Plaza, 11th Floor, Plot No. 18, Block 45A Makubusho Dar es salaam, Tanzania</p>
                            </div>
                        </div>
                    </div><!-- Col 1 end -->

                    <div class="col-md-4">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fa fa-envelope mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4>Email Us</h4>
                                <p>info@gsaconsultact.com</p>
                                <p>info@gsaafrica.com</p>

                            </div>
                        </div>
                    </div><!-- Col 2 end -->

                    <div class="col-md-4">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fa fa-phone-square mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4>Call Us</h4>
                                <p>(+255) 847-291-4353</p>
                                <p>(+255) 847-291-4353</p>

                            </div>
                        </div>
                    </div><!-- Col 3 end -->

                </div><!-- 1st row end -->

                <div class="gap-60"></div>

                <div class="">
                    <div id="" class="row">
                        <div class="col-md-6">
                            <h3 class="column-title">Feel free to send your message here</h3>
                            <!-- contact form works with formspree.io  -->
                            <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                            <form id="contact-form" action="{{ route('sendMessage') }}" method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="error-container"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control form-control-name" name="name" id="name" placeholder="Your name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control form-control-email" name="email" id="email" placeholder="Your email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input class="form-control form-control-subject" name="subject" id="subject" placeholder="Your subject" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control form-control-message" name="message" id="message" placeholder="Your message" rows="10" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block" style="background-color: #144591;" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            
                            @if (session('success'))
                                <div class="alert alert-success mt-3" style="background-color: #144591">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                        </div>
                        <div class="col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1813.1024390585949!2d39.2446024492795!3d-6.776808509591623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d3638ade31f%3A0x8ef888a0de2b0c91!2sDERM%20PLAZA!5e1!3m2!1sen!2stz!4v1688811012599!5m2!1sen!2stz"
                                width="520" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>

                <div class="gap-40"></div>

                <div class="row">


                </div><!-- Content row -->
            </div><!-- Conatiner end -->
        </section><!-- Main container end -->
        @include('layouts.include.footer')

        @include('assets.js')

    </div><!-- Body inner end -->
</body>

</html>
