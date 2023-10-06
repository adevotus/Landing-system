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
                        <h1>Book</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                    <div class="card-header">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Create Book Post.</button>
                                    </div>
                                        <!-- <span><a href="{{ route('create_book') }}"><h4 class="btn btn-primary">create book</h4></a> </span> -->

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th>Title</th>
                                                        <th> Date</th>
                                                        <th> Amount</th>

                                                        <th>Image</th>
                                                        <th>Initia Desctiption</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($books as $book )
                                                    <tr>
                                                       
                                                        <td>{{$book->title}}</td>
                                                        <td class="align-middle">
                                                            {{$book->date}}
                                                        </td>
                                                        <td><span>Tsh </span>{{$book->amount}} <span class = >/=</span></td>

                                                        <td>
                                                            <img alt="image" src="{{asset('public/images/'.$book->Covermage)}}"
                                                                class="rounded-circle" width="35"
                                                                data-toggle="tooltip" title="Wildan Ahdian">
                                                        </td>
                                                        <td>{{$book->initalDescr}}</td>
                                                       
                                                        <td>
                                                            <a class="btn btn-primary btn-action" href="{{ route('IndividualBook', $book->id) }}">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                    
                                                   
                                                </tbody>
                                            </table>
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
                                <h5 class="modal-title">Post the books to Landing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{ route('book_post') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Title</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    name="title" placeholder="title of book">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Cover Image</label>
                                            <input type="file" class="form-control" id="inputAddress"
                                                name="Covermage" placeholder="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Publication Date</label>
                                            <input type="date" class="form-control" id="inputAddress"
                                                name="date" placeholder="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Amount</label>
                                            <input type="number" class="form-control" id="inputAddress"
                                                name="amount" placeholder="2999">   
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Simple Description</label>
                                            <textarea name="initalDescr" id="" cols="30" class="form-control" rows="10"></textarea>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>


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
