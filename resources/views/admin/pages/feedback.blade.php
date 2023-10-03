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
                        <h1>Videos </h1>

                    </div>

                    <div class="section-body">


                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                <div class="card-header">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Add Video.</button>
                                    </div>
                                  
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            #
                                                        </th>
                                                        <th>Title</th>
                                                        <th>date</th>
                                                        <th>Cover Image</th>

                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($videos as $video)
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>{{ $video->title }}</td>
                                                            <td>
                                                                {{ $video->date }}
                                                            </td>
                                                         <td><a href="{{$video->links}}">preview</a></td>

                                                            <td>
                                                            
                                                                <a class="btn btn-primary  btn-action" href = "{{route('video_edit' $video->id }}">
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

                        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Post the video to Landing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{ route('video_post') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Title</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    name="title" placeholder="title of video">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Cover Image</label>
                                            <input type="file" class="form-control" id="inputAddress"
                                                name="coverImage" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Publication Date</label>
                                            <input type="date" class="form-control" id="inputAddress"
                                                name="publication_date" placeholder="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Link of Video</label>
                                            <input type="date" class="form-control" id="inputAddress"
                                                name="link" placeholder="Link of video">                                        </div>
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

                    </div>
                </section>
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>

    @include('assets.admin_js')
</body>

</html>
