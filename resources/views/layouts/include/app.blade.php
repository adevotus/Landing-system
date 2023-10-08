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
                      <form class="row g-4 mt-5" action="#"  method = "post" enctype="multipart/form-data">
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
                      <form class="row g-4 mt-5" action="#"  method = "post" enctype="multipart/form-data" >
                        @csrf
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
                            <input class="form-control input-box form-voyage-control" id="inputDateThree" type="numbe"  name=  "phoneNumber" placeholder="phone number" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
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
                   
                  </div>
                </nav>
              </div>
            </div>
            <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
          
            <div id="bookCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php $itemsPerSlide = 2; @endphp
        @for ($i = 0; $i < count($currentBook); $i += $itemsPerSlide)
            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}" data-bs-interval="10000">
                <div class="row">
                    @for ($j = $i; $j < $i + $itemsPerSlide; $j++)
                        @if (isset($currentBook[$j]))
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="card card-span h-100 text-white">
                                    <img class="img-fluid" src="{{ asset('public/images/'.$currentBook[$j]->Covermage) }}" alt="..." />
                                    <div class="card-img-overlay ps-0">
                                        <span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span>
                                        <span class="badge bg-secondary p-2"></span>
                                    </div>
                                    <div class="card-body ps-0">
                                        <h5 class="fw-bold text-1000 mb-4 text-truncate">{{ $currentBook[$j]->title }}</h5>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span>
                                            <span class="text-900 me-3">Maku</span>
                                            <span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span>
                                            <span class="text-900">{{ $currentBook[$j]->date }}</span>
                                        </div>
                                        <h3 class="mb-3 text-primary fw-bolder fs-4">
                                            <span style ="font-size:15px">TSH {{ $currentBook[$j]->amount }}</span>
                                            <span class="text-900 fs--1 fw-normal" style ="font-size:15px">/Per book</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        @endfor
    </div>
    <a class="carousel-control-prev" href="#bookCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#bookCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
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
                <div class="m-2">
                <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga qui, amet tempora alias officia nobis ex in tempore minus, quasi magni doloremque!
                   Eum, at qui praesentium iste placeat rem ab.</p>
                </div>
              
    

            </div>
            <div class="col-lg-7">
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Remove Previous and Next Controls -->
    <div class="carousel-inner">
        @foreach($testmon as $key => $item)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="10000">
                <div class="row h-50">
                    <div class="col-md-12">
                        <img class="w-100" src="{{ asset('public/images/'.$item->Covermage) }}" width="383" alt="..." />
                        <div class="py-4">
                            <h4 class="mb-2 text-1000">Participate in activities like vvvvcccc</h4>
                            <h2 class="mb-3 text-primary fs-3 fs-md-6">Bungee Jumping</h2>
                            <p class="fw-normal mb-0 pe-lg-9">{{ $item->initalDescr }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Place Carousel Indicators (Dots) at the Bottom -->
    <div class="text-center"> <!-- Center the carousel indicators horizontally -->
    <ol class="carousel-indicators">
        @foreach($testmon as $key => $item)
            <li data-bs-target="#imageCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
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
                      @foreach ($books as $book)
                      <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="{{asset('public/images/'.$book->Covermage)}}" alt="..." />
                          <div class="card-img-overlay ps-0">
                            <span class="badge bg-primary ms-3 me-1 p-2"><i class="fas fa-clock me-1"></i></span>
                            <span class="badge bg-secondary p-2"></span>
                          </div>
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 mb-4 text-truncate"><b>Title:</b>{{$book->title}}</h5>
                            <div class="d-flex align-items-center justify-content-start">
                              <span class="text-800 fs--1 me-2"><i class="fas fa-map-marker-alt"></i></span>
                              <span class="text-900 me-3">Makumbusho</span><span class="text-800 fs--1 me-2"><i class="fas fa-calendar"></i></span>
                              <span class="text-900"><small>Publish date:</small>{{$book->date}}</span>
                            </div>
                            <h3 class="mb-3 text-primary fw-bolder fs-4">
                              <span>Tsh {{$book->amount}}/=</span>
                              <span class="text-900 fs--1 fw-normal">/Per book</span>
                            </h3>
                          </div>
                        </div>
                      </div>
                     @endforeach
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
        <div class="col-lg-7 mx-auto text-center mb-6">
             <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Covers and It's Links video</h5>
            </div>
        <div class="container bg-offcanvas-gray-right">
          <div class="row g-2">
            <div class="col-sm-6 col-lg-8">
              <div class="row g-2">
              


                @if(count($videos) > 0)
                @foreach($videos as $video)
                <div class="col-md-6">
                      <div class="card card-span h-100 text-white position-relative">
                        <img class="img-fluid h-100 w-100" src="{{asset('public/images/'.$video->Covermage)}}" height="375" alt="..." />
                        <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-voyage-gradient">
                          <div class="mt-auto px-4 mb-1">
                            <h3 class="fs-1 fs-md-2 text-white">{{$video->title}}</h3>
                            <span class="text-light fs--1 me-1"><i class="fas fa-gift"></i></span>
                            <span class="text-light me-3"><span>Publication Date:</span>{{$video->date}}</span>
                          </div>
                          <a class="stretched-link" href="#!"></a>
                        </div>
                        <!-- Add a play button overlay -->
                        <div class="play-button bg-danger"> 
                          <a href="{{$video->link}}"> <i class="fa fa-play-circle"style="color:#fff"></i></a>
                         
                        </div>
                      </div>
                </div>
                @endforeach
                 @else
                <div class="col-md-6 text-center">
                    <p>Coming Soon</p>
                </div>
                @endif
               
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

     
      
      
    


      
      @include('layouts.include.footer')
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
   


    @include('assets.js')


   
  </body>

</html>