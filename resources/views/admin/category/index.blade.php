@extends('layouts.adminbase')

@section('title', 'Category List')




@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-sm-2 d-flex no-block align-items-center">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-rounded btn-lg" >Add Category</a>

            </div>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category List</li>
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

                    <div class="border-top">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-primary"><b>Category List</b></h4>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th <span class="text-primary"><b>Id</b></span>
                                        <th <span class="text-primary"><b>Parent</b></span>
                                        <th <span class="text-primary"><b>Title</b></span>
                                        <th <span class="text-primary"><b>Image</b></span>
                                        <th <span class="text-primary"><b>Status</b></span>
                                        <th <span class="text-primary"><b>Edit</b></span>
                                        <th <span class="text-primary"><b>Delete</b></span>
                                        <th <span class="text-primary"><b>Show</b></span>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{ \App\Http\Controllers\AdminPanel\CategoryController:: getParentsTree($rs,$rs ->title) }} </td>
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
                                        <td><a href="{{route('admin.category.show',['id'=>$rs->id] )}}" class="btn btn-success btn-rounded btn-fw" >Show</a> </td>
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


@endsection
