@extends('layouts.main')

@section('js-top')
	{!!$map['js']!!}
@endsection
@section('content')

    @include('layouts.partials.video')
    @include('layouts.partials.zaavar')
		{!!$map['html']!!}
    @include('layouts.partials.contact')
@endsection