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
                        <h1>Parent Registered</h1>
                        <div class="section-header-breadcrumb">

                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                <div class="card-header">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Register Parent.</button>
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
                                                       <th> Region</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($parents as $parent)
                                                    <tr>
                                                        <td>
                                                          {{$parent->id}}  
                                                        </td>
                                                        <td>{{$parent->name}}</td>
                                                        <td>{{$parent->region}}</td>
                                                        <td>{{$parent->email}}</td>
                                                        <td>{{$parent->contact}}</td>
                                                        <td>
                                                            <a class="btn btn-primary btn-action mr-1" href="{{ route('parent_edit', $parent->id) }}">
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
                                <h5 class="modal-title">Register Parent</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="{{ route('parent_registration') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Name</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    name="name" placeholder="name of parent">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Region</label>
                                            <input type="text" class="form-control" id="inputAddress"
                                                name="region" placeholder="mwanza">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">email</label>
                                            <input type="email" class="form-control" id="inputAddress"
                                                name="email" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Contact</label>
                                            <input type="number" class="form-control" id="inputAddress"
                                                name="contact" placeholder="+255 784 009 090">                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-5">
                                                <button type="submit" class="btn btn-primary btn-block">Save
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
                    @include('layouts.admin.footer')

        </div>
    </div>
    @include('assets.admin_js')

</body>

</html>
