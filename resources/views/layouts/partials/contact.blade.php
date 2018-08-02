<div class="row oa-contact no-gutters">
	<div class="col-md-6 contact-map">
		<h1>Холбоо барих</h1>
		<p> <i class="fas fa-phone"></i> 7000-2266, 8003-2266</p>
		<p><i class="fas fa-map-marker-alt"></i> ХУД, Оргил стар хотхон, 58-р байр, 1-р орц, 4 тоот</p>
		<p><i class="fab fa-facebook-f"></i> Монголын оюун ухааны академи</p>
		<p><span><img src="/assets/what3words.svg"></span> Цээжлэх. Хэвшмэл. Мэргэших</p>
	</div>
	<div class="col-md-6 contact-form">
		<form method="POST" action="/messages">
		{{ csrf_field() }}
		  <div class="form-group">
		    <input required="required" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Нэр" name="name">
		  </div>
		  <div class="form-group">
		    <input required="required" type="text" class="form-control" id="exampleInputPassword1" placeholder="Имэйл, утас" name="contact">
		  </div>
		  <div class="form-group">
		    <textarea  required="required" class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
		  </div>
		  <button type="submit" class="btn btn-info btn-lg float-right">ИЛГЭЭХ</button>
		</form>
		<p>
			<span><i class="fab fa-facebook-f"></i></span>
			<span><i class="fab fa-twitter"></i></span>
			<span><i class="fab fa-youtube"></i></span>
		</p>
	</div>
</div>