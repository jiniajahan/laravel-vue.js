@extends('layout')

@section('title', 'Projects listing')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-table">
                        <div class="panel-heading">Add New Product</div>
                        <div class="panel-body p-body-gap">

                            {!! Form::open(['class' => 'form-horizontal', 'url'=>'products','role' => 'form', 'method' => 'post', 'data-toggle'=>'validator','files' => true ]) !!}
                            <div class="form-group">
                                <label class="control-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input id = "name" type = "text" class = "form-control" required="required" name = "title"
                                           value = "title">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Description</label>
                                <div class="col-md-9">
                                    <input id = "name" type = "text" class = "form-control" required="required" name = "description"
                                           value = "description">

                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Create User</button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

