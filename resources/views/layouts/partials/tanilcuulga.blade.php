@inject('abouts', 'App\About')

<div class="row no-gutters tanilcuulga">
  <div class="col-md-3 ">
    <div class="nav flex-column nav-pills tanilcuulga-left" id="v2-pills-tab" role="tablist" aria-orientation="vertical">
      @foreach($abouts->getByPosition() as $key => $about)
        <a class="nav-link {{$key==0 ? 'active':''}}" id="v2-pills-{{$about->id}}-tab" data-toggle="pill" href="#v2-pills-{{$about->id}}" role="tab" aria-controls="v2-pills-{{$about->id}}" aria-selected="true">{{$about->title}}</a>
      @endforeach
    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content tanilcuulga-right" id="v2-pills-tabContent">
      @foreach($abouts->getByPosition() as $key => $about)
      <div class="tab-pane fade {{$key==0 ? 'show active':''}}" id="v2-pills-{{$about->id}}" role="tabpanel" aria-labelledby="v2-pills-{{$about->id}}-tab">
        {!!$about->body!!}
      </div>
      @endforeach
    </div>
  </div>
</div>