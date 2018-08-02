@include('layouts.partials.errors')
<div class="row no-gutters oa-anket">
	<div class="col-md-6 anket-left">
		<h1>Анкет бөглөх</h1>
		<form method="POST" action="{{route('application_path', array('surgalt' => $surgalt->id,  'salbar' => $salbar->id))}}">
		    {{ csrf_field() }}
		  <div class="form-group">
		    <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Сурагчийн овог:">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Сурагчийн нэр:">
		  </div>

		  <div class="row">
		    <div class="col">
		      <input type="text" class="form-control" name="registerId" placeholder="Регистр:">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" name="phone" placeholder="Утас:">
		    </div>
		  </div>

		  <div class="form-group">
		    <input type="text" class="form-control" name="school" aria-describedby="emailHelp" placeholder="Сургуулийн нэр:">
		  </div>

		  <div class="row">
		    <div class="col">
		      <input type="text" class="form-control" name="grade" placeholder="Анги:">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" name="district" placeholder="Амьдардаг дүүрэг:">
		    </div>
		  </div>

		  <div class="form-group">
		    <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Имэйл:">
		  </div>

  		  <div class="form-group">
		    <input type="text" class="form-control" name="parentName" aria-describedby="emailHelp" placeholder="Эцэг эхийн нэр:">
		  </div>
		  <div class="row">
		    <div class="col">
		      <input type="text" class="form-control" name="parentPhone" placeholder="утас:">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" name="parentMail" placeholder="И-мэйл:">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-info btn-lg">Үргэлжлүүлэх</button>
		</form>
	</div>
	<div class="col-md-6 anket-right">
		<h1>Сургалтын мэдээлэл</h1>
		<p>Та Монголын Оюун Ухааны академийн {{$surgalt->start_at}} өдрийн {{$salbar->title}} салбар дахь 
		{{$surgalt->title}} сургалтыг сонгосон байна</p>
		<p>Таны сонгосон сургалт:</p>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Сургалтын нэр</th>.
		      <th scope="col">Салбар</th>
		      <th scope="col">Төлбөр</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>{{$surgalt->title}}</td>
		      <td>{{$salbar->title}}</td>
		      <td>{{$surgalt->price}}₮</td>
		    </tr>
		  </tbody>
		</table>
		<div class="oa-salbar-images row no-gutters">
			<div class="col-md-12">
				@include('layouts.partials.salbarImages')
				
			</div>
		</div>
	</div>
</div>

@section('js')
    <!-- Initialize salbar-images-Swiper -->
  <script>
    var swiper = new Swiper('.salbar-images-swiper-container', {
      pagination: {
        el: '.salbar-images-swiper-pagination',
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
@endsection