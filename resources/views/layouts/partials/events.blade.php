@inject('events', 'App\Oaevent')
<div class="row no-gutters oa-events ">
	<div class="col-md-12">
		<h1>Удахгүй болох арга хэмжээ</h1>
	</div>
	@foreach($events->getLatest() as $key => $event)
		<div class="col-md-{{$key==0? 6 : 3}}">
			<div class="event-card">
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$event->video}}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<h4 class="event-title">{{$event->title}}</h4>
				<h4 class="event-date"><span>{{$event->start_at}}</span></h4>
				{!!$event->shorten()!!}
				<span class="event-link"><a href="{{route('events_show_path', array('id' => $event->id))}}">Дэлгэрэнгүй</a></span>
			</div>

		</div>
	@endforeach
	
</div>