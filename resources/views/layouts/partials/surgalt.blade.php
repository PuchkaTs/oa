<h1 class="blue-title">Сургалт</h1>
<div class="row">
  <div class="col-md-2">
    <div class="nav flex-column nav-pills surgalt-left dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      @foreach($surgaltTypes as $key=>$surgaltType)
      <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="v-pills-{{$surgaltType->id}}-tab" data-toggle="pill" href="#v-pills-{{$surgaltType->id}}" role="tab" aria-controls="v-pills-{{$surgaltType->id}}" aria-selected="true">
      <span class="surgalt-icon"><img class="svg" src="/assets/surgalt_type/{{$surgaltType->icon}}"></span> 
      {{$surgaltType->title}}</a>
      @endforeach
    </div>
  </div>
  <div class="col-md-10">
    <div class="tab-content" id="v-pills-tabContent">
      @foreach($surgaltTypes as $key=>$surgaltType)
        <div class="tab-pane fade  {{$key == 0 ? 'show active' : ''}}" id="v-pills-{{$surgaltType->id}}" role="tabpanel" aria-labelledby="v-pills-{{$surgaltType->id}}-tab">
        	<div class="row">
            @foreach($surgaltType->surgalt as $surgalt)
          		<div class="col-md-3">
        				<div class="card surgalt-card" style="width: 100%;">
        				  <img class="card-img-top" src="/assets/surgalt/{{$surgalt->image}}" alt="Card image cap">
        				  <div class="card-body">
        				    <h6 class="card-title card-text">Хамрах хүрээ</h6>
        				    <h6 class="card-title text-bold card-text">{{$surgalt->grade->title}}</h6>
        				    <div class="card-date">
        					    <p class="card-text text-bold">Эхлэх: {{$surgalt->start_at}}</p>
        					    <p class="card-text text-bold">Дуусах: {{$surgalt->end_at}}</p>
        					    <span>/Хичээл ажлын {{$surgalt->days}} өдөр/</span>
        				    </div>
        				    <p class=" card-text card-seat text-bold">- 5 суудал үлдлээ -</p>
        				    <hr>
        				    <p class="card-text">Үргэлжлэх хугацаа</p>
        				    <p class=" card-text text-bold">{{$surgalt->time}}</p>
        				    <div class="oa-card-footer">				    
        				    	<a href="{{route('surgalt_path', $surgalt->id)}}">Дэлгэрэнгүй</a>
        				    	<a href="{{route('burtgel_path', array('id' => $surgalt->id,  'shat' => $surgalt->level->title))}}" class="btn btn-primary float-right">Бүртгүүлэх</a>
        				    </div>

        				  </div>
        				</div>
          		</div>
              @endforeach
        	</div>
        </div>
      @endforeach
    </div>
  </div>
</div>
