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
                        <h1>Publications</h1>
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
                                            data-target="#exampleModal">Post Publcations</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th>Publication Title</th>
                                                        <th>Publication date</th>
                                                        <th>Descriptions</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($publications as $publication )
                                                     
                                                    <tr>
                                                        <td>
                                                            {{$publication->id}}
                                                        </td>
                                                        <td>{{$publication->title}}</td>
                                                        <td>{{$publication->publication_date}}</td>
                                                        
                                                        <td>
                                                            {{$publication->description}}
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-primary btn-action mr-1" href="{{asset('\storage\app\public\documents'.$publication->coverImage)}}" data-toggle="tooltip" title="view"><i class="fas fa-eye"></i></a>

   <a class="btn btn-danger btn-action" data-toggle="modal" data-target="#confirmDeleteModal{{$publication->id}}">
                                                                <i class="fas fa-trash"></i>
                                                            </a>                                                          </td>
                       
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
                <div class="modal fade" tabindex="-1" role="dialog" id="confirmDeleteModal{{$publication->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModal{{$publication->id}}Label">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this ? 
                                <h5>{{$publication->title}}.</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('publications', $publication->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Post the Publications</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{route('post_publications')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Title</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="title"
                                                    placeholder="title of publications">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Documents</label>
                                            <input type="file" class="form-control" id="inputAddress" name="coverImage"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Publication Date</label>
                                            <input type="date" class="form-control" id="inputAddress" name="publication_date"
                                                placeholder="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Descriptions</label>
                                            <textarea id="" class="form-control" cols="30" rows="10" name="description"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">Save changes</button>
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
