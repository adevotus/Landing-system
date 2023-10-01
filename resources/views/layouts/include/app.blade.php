@include('assets.css')

  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
     
@include('layouts.include.header')


      <section class="mt-7 py-0">
        <!-- <div class="bg-holder w-50 bg-right d-none d-lg-block" style="background-image:url(assets/img/gallery/hero-section-1.png);">
        </div> -->
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
              <h3 class="display-6 text-1000 fw-normal">Let’s Make to part of Readings</h3>
              <h1 class="display-3 text-primary fw-bold">Join now to fill this.</h1>
              <div class="pt-5">
                <nav>
                  <div class="nav nav-tabs voyage-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-user"></i> Parents</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fas fa-graduation-cap"></i> Schools </button>
                    <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="fas fa-comments"></i> Reviews</button> -->
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <form class="row g-4 mt-5" method = "post" action = "" >
                        
                        @csrf
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddress1">Name</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddress1" type="text" name = "name" placeholder="Your Name" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateTwo" type="email"  name = "email" placeholder="your email"/><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-envelope"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputdateOne" type="number" name="contact" placeholder="Your Contact" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xl-5">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddress2">Region</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddress2" type="text" name = "region" placeholder="Your Region" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        
                       
      
                        <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Submit </button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddressThree">School Name</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddressThree"  name = "name" type="text" placeholder="school name" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-graduation-cap"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputAddressFour">School Region</label>
                            <input class="form-control input-box form-voyage-control" id="inputAddressFour" type="text"  name = "region" placeholder="Region" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateThree" type="numbe"  name=  "phone number" placeholder="phone number" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateThree" type="email" name ="email" placeholder="School Email" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-envelope"></i></span>
                          </div>
                        </div>
                        <!-- <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateFour" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div> -->
                        <!-- <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPeopleTwo">People</label>
                            <select class="form-select form-voyage-select input-box" id="inputPeopleTwo">
                              <option selected="selected">2 Adults</option>
                              <option>2 Adults 1 children</option>
                              <option>2 Adults 2 children</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div> -->
                        <div class="col-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Submit </button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <form class="row g-4 mt-5">
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateFive" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <input class="form-control input-box form-voyage-control" id="inputDateSix" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="input-group-icon">
                            <label class="form-label visually-hidden" for="inputPeopleThree">Person</label>
                            <select class="form-select form-voyage-select input-box" id="inputPeopleThree">
                              <option selected="selected">2 Adults</option>
                              <option>2 Adults 1 children</option>
                              <option>2 Adults 2 children</option>
                            </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                          </div>
                        </div>
                        <div class="col-12 d-grid mt-6">
                          <button class="btn btn-secondary" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
            <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
              <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 17500</span>
                              <span class="text-900 fs--1 fw-normal">/Per book</span>
                            </h3>
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 250000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 17500</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 25000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 175000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 25000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_5.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 175000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_4.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>TSH 250000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next                                    </span></button>
                  </div>
                </div>
                <div class="row flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
    
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-7" id="testimon">

        <div class="container">
          <div class="row g-0">
            <div class="col-lg-5 order-1">
                {{-- <img class="w-100 mt-5 mt-lg-0" src="{{asset('landing/assets/img/gallery/testmony-1.jpg')}}" height="750" alt="..." /> --}}
                <div class="m-2 mt-5">
                    <h2 class="mb-3 text-primary fs-3 fs-md-6 text-center mt-5">Our Client Reviews</h2>

                </div>
    

            </div>
            <div class="col-lg-7">
              <div class="carousel slide" id="carouselActivity" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="{{asset('landing/assets/img/gallery/activity.png')}}" width="383" alt="..." />
                        <div class="py-4">
                          <h4 class="mb-2 text-1000">Participate in activities like vvvvcccc</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                          <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy jumping, is a sport in which a person jumps from a considerable height while attached to a long elastic line. Usually, the pad is built on a high structure like a structure or a crane, a bridge across a steep ravine</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="{{asset('landing/assets/img/gallery/activity.png')}}" width="383" alt="..." />
                        <div class="py-4">
                          <h4 class="mb-2 text-1000">Participate in activities like</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                          <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy jumping, is a sport in which a person jumps from a considerable height while attached to a long elastic line. Usually, the pad is built on a high structure like a structure or a crane, a bridge across a steep ravine</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="1000">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="{{asset('landing/assets/img/gallery/activity.png')}}" width="383" alt="..." />
                        <div class="py-4">
                          <h4 class="mb-2 text-1000">Participate in activities like</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                          <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy jumping, is a sport in which a person jumps from a considerable height while attached to a long elastic line. Usually, the pad is built on a high structure like a structure or a crane, a bridge across a steep ravine</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100">
                      <div class="col-12"><img class="w-100" src="{{asset('landing/assets/img/gallery/activity.png')}}" width="383" alt="..." />
                        <div class="py-4">
                          <h4 class="mb-2 text-1000">Participate in activities like</h4>
                          <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                          <p class="fw-normal mb-0 pe-lg-9">Bungee jumping, often known as bungy jumping, is a sport in which a person jumps from a considerable height while attached to a long elastic line. Usually, the pad is built on a high structure like a structure or a crane, a bridge across a steep ravine</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ps-sm-5 ps-md-0 align-items-end">
                  <div class="col-4 col-sm-6 position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselShare" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselShare" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                  <div class="col-8 col-sm-6 position-relative z-index-2 text-end"><a class="btn btn-lg text-secondary" href="#" role="button">Read More
                      <svg class="bi bi-arrow-right ms-2" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
     
      <section id="booksCover">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Books  and It's Cover</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 175000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 25000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island Resort: Luxury destination without compromise</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 300oo</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 75000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 25000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island Resort: Luxury destination without compromise</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 30000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 17500</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_7.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 25000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_6.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island Resort: Luxury destination without compromise</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 30000</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_4.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort: The most joyful way to spend your holiday</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 17500</span><span class="text-900 fs--1 fw-normal">/Per book</span></h3>
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_2.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a romantic cruise tour of at the sunny side of life</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 25000</span><span class="text-900 fs--1 fw-normal">/Per person</span></h3>
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('landing/assets/img/book_1.jpg')}}" alt="..." />
                          <div class="card-img-overlay ps-0"><span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span><span class="badge bg-secondary p-2"></span></div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island Resort: Luxury destination without compromise</h5>
                            <div class="d-flex align-items-center justify-content-start"><span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-900 me-3">Maldives</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span><span class="text-900">4 days</span></div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4"><span>Tsh 3000</span><span class="text-900 fs--1 fw-normal">/Per person</span></h3>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next                                    </span></button>
                  </div>
                </div>
                <div class="row flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-7 overflow-hidden" id="places">
        <div class="container bg-offcanvas-gray-right">
          
          <div class="row g-2">
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="{{asset('landing/assets/img/book_6.jpg')}}" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Munich</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="{{asset('landing/assets/img/book_3.jpg')}}" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Munich</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="row g-2">
                <div class="col-12">
                  <div class="card card-span h-100 text-white"><img class="img-fluid h-100 w-100" src="{{asset('landing/assets/img/book_2.jpg')}}" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Paris</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card card-span h-100 text-white">
                    <img class="img-fluid h-100 w-100" src="{{asset('landing/assets/img/book_1.jpg')}}" height="375" alt="..." />
                    <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                      <div class="mt-auto px-4 mb-1">
                        <h3 class="fs-1 fs-md-2 text-white">Vienna</h3><span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span><span class="text-light me-3">10 Packages</span>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div class="bg-secondary-gradient h-100 d-flex align-items-center">
                <div class="text-light p-4 p-sm-6 p-lg-0 px-xxl-6">
                  <p class="fs-1 px-4 mb-6">Improve your mind in studying and gain more  knowledge in books and  resources</p>
                  <a class="btn btn-lg text-light fs-2" href="#!" role="button">Click to view more
                    <img class="img-fluid h-100 w-100" src="{{asset('landing/assets/img/book_5.jpg')}}" height="375" alt="..." />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     
      
      

      <!-- ============================================-->
      <!-- <section> begin ============================-->
    


   

    


      

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      @include('layouts.include.footer')
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    @include('assets.js')


   
  </body>

</html>