@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3>Hello Super Admin!</h3>

        <form method="POST" action="/ncst" accept-charset="UTF-8">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>

<!--    place holder-->
<div style="height: 500px; width: 100%"></div>
@stop