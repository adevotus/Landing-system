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
                        <h1>Blog</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        {{-- <h4>Basic DataTables</h4> --}}
                                        <span><a href="{{ route('create_blog') }}"><h4 class="btn btn-primary">create blog</h4></a> </span>

                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th>Blog Title</th>
                                                        <th>Publish Date</th>
                                                        <th>Image</th>
                                                        <th>Initia Desctiption</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($blogs as $blog )
                                                    <tr>
                                                        <td>
                                                            {{$blog->id}}
                                                        </td>
                                                        <td>{{$blog->blogTitle}}</td>
                                                        <td class="align-middle">
                                                            {{$blog->publDate}}
                                                        </td>
                                                        <td>
                                                            <img alt="image" src="{{asset('public/images/'.$blog->blogImage)}}"
                                                                class="rounded-circle" width="35"
                                                                data-toggle="tooltip" title="Wildan Ahdian">
                                                        </td>
                                                        <td>{{$blog->initalDescr}}</td>
                                                       
                                                        <td>
                                                            <form action="{{ route('IndividualBlog', $blog->id) }}" method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <button type="submit" class="btn btn-primary btn-action mr-1" data-toggle="tooltip">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </button>
                                                            </form>
                                                         
                                                            <a class="btn btn-danger btn-action" data-toggle="modal" data-target="#confirmDeleteModal{{$blog->id}}">
                                                                <i class="fas fa-trash"></i>
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


                <div class="modal fade" tabindex="-1" role="dialog" id="confirmDeleteModal{{$blog->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModal{{$blog->id}}Label">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this blog? 
                                <h5>{{$blog->blogTitle}}.</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('blog_delete', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
