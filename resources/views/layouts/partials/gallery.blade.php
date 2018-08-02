@inject('gallery', 'App\Gallery')

  <!-- Swiper -->
  <div class="oa-gallery-container">
	  <div class="gallery-swiper-container oa-gallery">
	    <div class="swiper-wrapper">
	    	@foreach($gallery->getByPosition() as $agall)
				<div class="swiper-slide">
			      	<div class="row ">
						<div class="col-md-6 gallery-left">
							<h1>{{$agall->title}}</h1>
							<h5>{{$agall->subtitle}}</h5>
							{!!$agall->body!!}
						</div>
						<div class="col-md-6 gallery-right">
							@include('layouts.partials.gallery-swipe')
						</div>
					</div>
				</div>
	    	@endforeach
	    </div>
	    <!-- Add Pagination -->
	    <div class="gallery-swiper-pagination swiper-pagination-white"></div>
        <!-- If we need navigation buttons -->
	    <div class="swiper-button-prev swiper-button-white"></div>
	    <div class="swiper-button-next swiper-button-white"></div>
	  </div>
  </div>


