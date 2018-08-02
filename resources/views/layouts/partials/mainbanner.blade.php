@inject('banners', 'App\Banner')
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($banners->getByPosition() as $banner)
            <div class="swiper-slide"><div class="oa-banner"><img src="/assets/banners/{{$banner->image}}"><a href="{{$banner->link}}" class="btn btn-info btn-lg oa-more">Дэлгэрэнгүй</a></div></div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>