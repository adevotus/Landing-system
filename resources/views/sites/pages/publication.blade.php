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
                                <h1 class="banner-title">Publications</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Publications</a></li>
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
                                        @foreach ($sitePublications as $sitepublication)
                                        <div class="card">
                                            <div class="card-header">
                                                <h2 class="column-title mrt-0" style="color: #144591;">{{$sitepublication->title}}</h2>

                                            </div>
        
                                            <div  class="collapse show">
                                                <div class="card-body">

                                                    <span class="text-bold">Posted Date: <b class="text-danger">{{$sitepublication->publication_date}}</b></span>
                                                    <p class="text-justify">{{$sitepublication->description}} </p>


                                                     <div class="row">
                                                        <div class="col-md-4">
                                                           
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="{{asset(''.$sitepublication->coverImage)}}"class="btn btn-primary">download</a>
                                                        </div>
                                                     </div>
            
                                                </div>
                                            </div>
                                        </div> 
                                        @endforeach
                                        
                                     


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