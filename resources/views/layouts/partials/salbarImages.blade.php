<!-- Slider main container -->
<div class="salbar-images-swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($salbar->images as $image)
	        <div class="swiper-slide"><img src="/assets/salbar/{{$image->image}}"></div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="salbar-images-swiper-pagination swiper-pagination-white"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-primary"></div>
    <div class="swiper-button-next swiper-button-primary"></div>
</div>