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
                        <h1>Testimon</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        {{-- <h4>Basic DataTables</h4> --}}
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Add Testimony</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th> Name</th>
                                                        <th> Image</th>
                                                        <th>Descriptions</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($testimons as $testimon)                                            
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>{{$testimon->title}}</td>
                                                       
                                                        <td>
                                                            <img alt="image" src="{{asset('public/images'.$testimon->Covermage)}}"
                                                                class="rounded-circle" width="35"
                                                                data-toggle="tooltip" title="Wildan Ahdian">
                                                        </td>
                                                        <td>{{$testimon->initalDescr}}</td>
                                                    
                                                        <td>
                                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
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
                                <h5 class="modal-title">Add Testimony</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{route('testimon_post')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4"> Title</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="title"
                                                    placeholder="title of testimon">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4"> Name</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="name"
                                                    placeholder="name of Testimon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Image</label>
                                            <input type="file" class="form-control" id="inputAddress" name="Covermage"
                                                placeholder="1234 Main St">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputAddress">Date</label>
                                            <input type="date" class="form-control" id="inputAddress" name="date"
                                                placeholder="1234 Main St">
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="inputAddress2">Descriptions</label>
                                            <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
