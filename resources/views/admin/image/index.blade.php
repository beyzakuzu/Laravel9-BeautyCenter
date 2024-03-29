
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    @extends('layouts.adminwindow')

    @section('title', 'Service Image Gallery')


    @section('content')

        <h3>{{$service->title}}</h3>
        <hr>
        <form class="form-horizontal" action="{{route('admin.image.store',['pid'=>$service->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <div class="form-group">
                    <label for="fname" >Title</label>
                    <input type="text" class="form-control"  name= "title" placeholder="Title">
                </div>
                <div class="form-group row">
                    <label for="exampleInputFile" >Image</label>
                    <div class="input-group">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                        </div>

                    </div>
                </div>

                <div class="input-group-append>
                    <input type="submit" value="Upload">
                        <button type="submit" class="btn btn-warning btn-rounded btn-fw">Update Data</button>

                    </div>
                </div>
            </div>




                    </div>
                </div>
            </form>
            </div>

            </div>

    <div class="page-breadcrumb">
        <div class="row">


        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

                    <div class="border-top">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-primary"><b>Service Image List</b></h4>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th <span class="text-primary"><b>Id</b></span>

                                        <th <span class="text-primary"><b>Title</b></span>
                                        <th <span class="text-primary"><b>Image</b></span>
                                        <th <span class="text-primary"><b>Update</b></span>
                                        <th <span class="text-primary"><b>Delete</b></span>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}} </td>
                                        <td>
                                            @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>

                                        <td><a href="{{route('admin.image.destroy',['pid'=>$service->id,'id'=>$rs->id])}}" class="btn btn-danger btn-rounded btn-fw"
                                            onclick="return confirm('Deleting! Are you sure?')">Delete</a> </td>
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

    </div>
    @endsection
