@extends('layouts.adminbase')

@section('title', 'Add Service')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection




@section('content')

    <div class="page-breadcrumb">
     <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Add Service</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">


        <div class="card-primary">
            <div class="col-12">
                <div class="card">
                    <form class="form-horizontal" action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Service Elements</h4>
                        </div>

                    <div class="card-body">
                        <div class="form-group"
                             <label> Parent Service </label>

                        <select class="form-control-file" name="category_id">
                            @foreach($data as $rs)
                                <option value="{{$rs -> id}}"> {{ \App\Http\Controllers\AdminPanel\CategoryController:: getParentsTree($rs,$rs ->title) }}</option>
                            @endforeach
                        </select>
                    </div>
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
                            <label for="lname" >Price</label>
                            <input type="number" class="form-control" name="price" value="0">
                        </div>
                        <div class="form-group row">
                            <label for="lname" >Days</label>
                            <input type="text" class="form-control" name="day" placeholder="Days">
                        </div>


                        <div class="form-group row">
                            <label for="lname" >Detail</label>
                            <textarea class="form-control" id="detail" name="detail">

                            </textarea>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#detail' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

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

