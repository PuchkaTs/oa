@extends('layouts.main')

@section('content')


<div class="row no-gutters justify-content-center">
    <div class="col-md-8">
        <h1 class="blue-title">{{$product->title}}</h1>
        {!! $product->body!!}
    </div>
</div>

@include('layouts.partials.contact')

@endsection
