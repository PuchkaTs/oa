@inject('news', 'App\News')
<div class="row justify-content-md-center oa-medee-container no-gutters">
	<div class="col-md-8">
		<h1 class="blue-title">Мэдээ мэдээлэл</h1>
		@foreach($news->getLatest() as $anews)
			<div class="oa-medee row">
				<div class="col-md-3">
					<div class="medee-zurag">
						<img src="/assets/news/thumbs/{{$anews->image}}">
					</div>
				</div>
				<div class="col-md-9 medee-right">
					<h6>{{$anews->title}}</h6>
					{!!$anews->shorten(300)!!}
					<span><a href="{{route('news_show_path', array('id' => $anews->id))}}">Дэлгэрэнгүй</a></span>
				</div>
			</div>
		@endforeach
		
	</div>
</div>