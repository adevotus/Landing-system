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
                        <h1>blog</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{$book->title}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <a href="#"
                                            class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none"
                                            data-toggle-slide="#ticket-items">
                                            <i class="fas fa-list"></i> All Tickets
                                        </a>
                                        <div class="tickets">
                                            <div class="ticket-items" id="ticket-items">
                                                <div class="ticket-item">
                                                    <img src="{{ asset('public/images/' . $book->Covermage) }}"
                                                        alt="image" width="410" height="360">

                                                </div>

                                            </div>
                                            <div class="ticket-content">
                                                <div class="ticket-header">
                                                    
                                                    <div class="ticket-detail">
                                                        <div class="ticket-title">
                                                        </div>
                                                        <div class="ticket-info">
                                                            <div class="font-weight-600">{{ Auth::user()->name }}</div> |
                                                            <div class="text-primary font-weight-600">{{$book->date}}</div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="ticket-description">
                                                    <h4>{{$book->title}}</h4>

                                                    <p>{{ $book->initalDescr }}</p>
                                                    <p>{{ $book->amount }}</p>
                                                </div>
                                                <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Edit the Post</button>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update the Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{ url('book_update/'.$book->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Title</label>
                                                <input type="text" class="form-control" id="inputEmail4" 
                                                    name="blogTitle" placeholder="title of publications" value="{{$book->title}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Blog Image</label>
                                            <input type="file" class="form-control" id="inputAddress"
                                                name="blogImage" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Publication Date</label>
                                            <input type="date" class="form-control" id="inputAddress"
                                                name="publDate" placeholder="date" value="{{$book->date}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Initial Descriptions</label>
                                            <textarea id="" class="form-control" cols="30" rows="20" name="initalDescr" value="{{$book->initalDescr}}"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputAddress2">More Descriptions</label>
                                            <textarea id="" class="form-control" cols="40" rows="30" name="moreDescr" value="{{$book->amount}}"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Update Post</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.admin.footer')

        </div>
    </div>
    @include('assets.admin_js')

</body>

</html>
