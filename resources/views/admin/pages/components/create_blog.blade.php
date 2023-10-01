@include('assets.admin_css')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.admin.header')
            @include('layouts.admin.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <div class="section-header-back">
                            <a href="{{ route('blog') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                        </div>
                        <h1>Create Post for book</h1>

                    </div>

                    <div class="section-body">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Write Your Post</h4>
                                    </div>
                                    <div class="card-body">
                                        {{-- <h4>Person Informations</h4> --}}

                                        <form action="{{route('blog_post')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-5">
                                                    <label for="inputEmail4">Book Title</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="blogTitle"
                                                        placeholder="your post title">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="inputEmail4">Publication Date</label>
                                                    <input type="date" class="form-control" id="inputEmail4" name="publDate"
                                                        placeholder="date">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-10">
                                                    <label for="inputEmail4">Cover Image</label>
                                                    <input type="file" class="form-control" id="inputEmail4" name="blogImage"
                                                    placeholder="date">
                                                </div>
    
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-10">
                                                    <label for="inputEmail4">Inital Desctiption</label>
                                                    <textarea name="initalDescr" id="" cols="30" rows="20" class="form-control"></textarea>
                                                </div>
    
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group col-md-10">
                                                    <label for="inputEmail4">More Descriptions</label>
                                                    <textarea name="moreDescr" id="" cols="30" rows="40" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <div class="col-md-4"></div>
                                                <div class="col-sm-12 col-md-4">
                                                    <button type="submit" class="btn btn-primary btn-block">Publish Post</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>

    @include('assets.admin_js')
</body>

</html>
