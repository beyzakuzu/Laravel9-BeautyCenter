@extends('layouts.adminbase')

@section('title', 'Show Category:'.$data->title)




@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
     <div class="row">
         <div class="col-sm-1">
            <a href="{{route('admin.category.edit',['id'=>$data->id] )}}"class="btn btn-info" style="width:100px">Edit</a>
         </div>
         <div class="col-sm-1">
             <a href="{{route('admin.category.destroy',['id'=>$data->id] )}}" onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-danger" style="width:100px" >Delete</a>
         </div>

            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="card">
            <div class="card-header"  >
                <h4 class="card-title">Detail Data</h4>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped">
                    <tr>
                        <b>   <th  style="width: 100px" <span class="text-info"><b>Id</b></span>
                        </th>
                        <td>{{$data->id}}</td> </b>
                    </tr>
                    <tr>
                          <th <span class="text-info"><b>Title</b></span>
                        </th>
                        <td>{{$data->title}}</td>
                    </tr>
                    <tr>
                        <th <span class="text-info"><b>Keywords</b></span>
                        </th>
                        <td>{{$data->keywords}}</td>
                    </tr>
                    <tr>
                        <th <span class="text-info"><b>Image</b></span>
                        </th>
                        <td></td>
                    </tr>
                    <tr>
                        <th <span class="text-info"><b>Status</b></span>
                        </th>
                        <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                        <th <span class="text-info"><b>Created Date</b></span>
                        </th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th <span class="text-info"><b>Update Date</b></span>
                            </th>
                        <td>{{$data->updated_at}}</td>
                    </tr>

                </table>
            </div>

        </div>

    </div>

@endsection

