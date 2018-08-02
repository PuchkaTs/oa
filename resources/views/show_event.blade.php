@extends('layouts.main')

@section('content')


<div class="row no-gutters justify-content-center event-card">
    <div class="col-md-8">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$event->video}}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
        <h1 class="blue-title">{{$event->title}}</h1>
		<h4 class="event-date" ><span style="background-color: #efefef">{{$event->start_at}}</span></h4>
        {!! $event->body!!}
    </div>
</div>

@include('layouts.partials.contact')

@endsection
