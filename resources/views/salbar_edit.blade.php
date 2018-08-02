@extends('layouts.main')

@section('js-top')
    {!!$map['js']!!}
@endsection

@section('content')
<h1 class="blue-title">Салбарын байршлыг сонгоно уу</h1>
    {!! $map['html'] !!}

<div class="row justify-content-center">
    <div class="col-md-6 ">
        <article>
             {!! Form::open(['method' => 'post', 'route' => ['salbar_path', $salbar->id]])!!}
                 <!-- Xloc form input -->
                 <div class="form-group">
                     {!! Form::label('xloc', 'Xloc:') !!}
                     {!! Form::text('xloc', null, ['class' => 'form-control']) !!}
                 </div>
                 <!-- Yloc form input -->
                 <div class="form-group">
                     {!! Form::label('yloc', 'Yloc:') !!}
                     {!! Form::text('yloc', null, ['class' => 'form-control']) !!}
                 </div>

                 <!-- Submit form input -->
                 <div class="form-group">
                     {!! Form::submit('Байршил шинэчлэх', ['class' => 'btn btn-primary btn-block'])!!}
                 </div>
             {!! Form::close()!!}
        </article>
    </div>

</div>


@stop

@section('js')

<script type="text/javascript">
        function updateInputs(newLat, newLng)
        {
            $( "input[name='xloc']" ).val(newLat);
            // make an ajax request to a PHP file
            // on our site that will update the database
            // pass in our lat/lng as parameters
            $( "input[name='yloc']" ).val(newLng);
        }
    </script>
@stop