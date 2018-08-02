@inject('setgegdluud', 'App\Setgegdel')
<div class="row no-gutters justify-content-md-center setgegdel">
	<div class="col-md-6">
		<h3 class="setgegdel-title">Сэтгэгдэл</h3>
		{!!$setgegdluud->getLatest()->body!!}
		<span class="author">{{$setgegdluud->getLatest()->name}}</span>
	</div>
	<img class="left1"  src="/assets/setgegdel/{{$setgegdluud->getLatest()->image1}}">
	<img class="left2"  src="/assets/setgegdel/{{$setgegdluud->getLatest()->image2}}">
	<img class="right1" src="/assets/setgegdel/{{$setgegdluud->getLatest()->image3}}">
	<img class="right2" src="/assets/setgegdel/{{$setgegdluud->getLatest()->image4}}">
</div>
