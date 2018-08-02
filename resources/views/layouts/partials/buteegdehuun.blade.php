@inject('products', 'App\Product')
  <!-- Swiper -->
  <div class="oa-buteegdehuun-container">
	  <div class="buteegdehuun-swiper-container oa-buteegdehuun">
	    <div class="swiper-wrapper">
	    	@foreach($products->getByPosition() as $product)
			<div class="swiper-slide">
		      	<div class="row">
		      		<div class="col-12">
						<h1 class="buteegdehuun-title">Бүтээгдэхүүн</h1>
		      		</div>
					<div class="col-md-6 buteegdehuun-left">
						@include('layouts.partials.buteegdehuun-swipe')
					</div>
					<div class="col-md-6 buteegdehuun-right">
						<h5>{{$product->titile}}</h5>
						{!!$product->shorten(800)!!}
						<a class="btn btn-info btn-lg float-right" href="{{route('products_show_path', [$product->id])}}">Дэлгэрэнгүй</a>
					</div>
				</div>
			</div>
			@endforeach
	    </div>
	    <!-- Add Pagination -->
	    <div class="buteegdehuun-swiper-pagination swiper-pagination-white"></div>
        <!-- If we need navigation buttons -->
	    <div class="swiper-button-prev swiper-button-white"></div>
	    <div class="swiper-button-next swiper-button-white"></div>
	  </div>
  </div>


