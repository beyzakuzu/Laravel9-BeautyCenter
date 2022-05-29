
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
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
                                    @foreach( $data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}} </td>
                                        <td>
                                            @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td>{{$rs->status}} </td>
                                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id] )}}" class="btn btn-warning btn-rounded btn-fw" >Edit</a> </td>
                                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id] )}}" class="btn btn-danger btn-rounded btn-fw"
                                            onclick="return confirm('Deleting! Are you sure?')">Delete</a> </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

