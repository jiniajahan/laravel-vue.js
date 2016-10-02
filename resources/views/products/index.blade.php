@extends('layout')

@section('title', 'Projects listing')

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($products as $product)
                <h2>{{$product->title}}</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">{{$product->slug}}</div>
                    <div class="panel-body">{{$product->description}}</div>
                    <div class="panel-footer">Panel Footer</div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

