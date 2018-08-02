@extends('layouts.main')

@section('content')


<div class="row no-gutters justify-content-center">
    <div class="col-md-8">
        <div class="medee-cover">
            <img src="/assets/news/{{$anews->image}}">
        </div>
        <h1 class="blue-title">{{$anews->title}}</h1>
        {!! $anews->body!!}
    </div>
</div>

@include('layouts.partials.contact')

@endsection
