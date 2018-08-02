@extends('layouts.main')

@section('content')

<div class="row no-gutters justify-content-center">
    <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$surgalt->video}}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <h1 class="blue-title">{{$surgalt->title}}</h1>
        {!!$surgalt->description!!}
        <p style="text-align:center"><a href="{{route('burtgel_path', array('id' => $surgalt->id,  'shat' => $surgalt->level->title))}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">БҮРТГҮҮЛЭХ</a></p>
    </div>
</div>
@include('layouts.partials.contact')

@endsection
