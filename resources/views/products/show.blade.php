@extends('layout')

@section('title', 'Projects listing')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <h2>{{$products->title}}</h2>
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$products->slug}}</div>
                            <div class="panel-body">{{$products->description}}</div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

