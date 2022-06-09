@extends('layouts.adminbase')

@section('title', 'Edit Service:'.$data->title)
@section('head')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
     <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4
             <span <b>Edit Service:{{$data->title}}</b></span>
        </h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Service Elements</h5>
                    </div>
                    <form class="form-horizontal" action="{{route('admin.service.update',['id'=>$data->id] )}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <select class="form-control-file" name="category_id">

                            @foreach($datalist as $rs)
                                <option value="{{$rs -> id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                            {{ \App\Http\Controllers\AdminPanel\CategoryController:: getParentsTree($rs,$rs ->title) }}</option>
                            @endforeach
                        </select>


                        <div class="form-group row">
                            <label for="fname" >Title</label>
                            <input type="text" class="form-control"  name= "title" value="{{$data->title}}">
                        </div>
                        <div class="form-group row">
                            <label for="lname" >Keywords</label>
                            <input type="text" class="form-control" name="keywords" {{$data->keywords}}>
                        </div>
                        <div class="form-group row">
                            <label for="lname" >Description</label>
                            <input type="text" class="form-control" name="description" {{$data->description}}>
                        </div>
                       <div class="form-group row">
                                <label for="lname" >Price</label>
                                <input type="number" class="form-control" name="price" value={{$data->price}}>
                        </div>
                        <div class="form-group row">
                            <label for="lname" >Days</label>
                            <input type="text" class="form-control" name="day" value={{$data->day}}>
                        </div>

                       <div class="form-group row">
                                <label for="lname" >Detail</label>
                                <textarea class="form-control" name="detail"> {{$data->detail}}
                            </textarea>


                       </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputFile" >Image</label>
                            <div class="input-group">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>



                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-warning btn-rounded btn-fw">Update Data</button>

                            </div>
                        </div>
                    </div>
            </div>
        </div>



    </div>

    </div>

@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function () {
            $('.textarea').summernote();
        });
    </script>
@endsection
