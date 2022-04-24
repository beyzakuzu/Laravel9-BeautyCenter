@extends('layouts.adminbase')

@section('title', 'Add Category')




@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
     <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Add Category</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                    <form class="form-horizontal" action="/admin/category/store" method="post">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Add Category</h4>
                        <div class="form-group row">
                            <label for="fname" >Title</label>
                            <input type="text" class="form-control"  name= "title" placeholder="Title">
                        </div>
                        <div class="form-group row">
                            <label for="lname" >Keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        </div>
                        <div class="form-group row">
                            <label for="lname" >Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputFile" >Image</label>
                            <div class="input-group">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                                </div>
                                <div class="border-top">
                                    <button type="button" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>



                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>



    </div>

    </div>
@endsection

