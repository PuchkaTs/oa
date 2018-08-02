@extends('layouts.main')

@section('content')
    @include('layouts.partials.mainbanner')
    @include('layouts.partials.surgalt')
    @include('layouts.partials.tanilcuulga')
    @include('layouts.partials.gallery')
    @include('layouts.partials.setgegdel')
    @include('layouts.partials.salbaruud')
    @include('layouts.partials.certificate')
    @include('layouts.partials.medeelel')
    @include('layouts.partials.buteegdehuun')
    @include('layouts.partials.events')
    @include('layouts.partials.contact')

@endsection

@section('js')
  <script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
  </script>

    <!-- Initialize gallery-Swiper -->
  <script>
    var swiper = new Swiper('.gallery-swiper-container', {
      pagination: {
        el: '.gallery-swiper-pagination',
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

  <!-- Initialize gallery swipe -->
  <script>
      lightGallery(document.getElementById('lightgallery'));
  </script>


    <!-- Initialize buteegdehuun-Swiper -->
  <script>
    var swiper = new Swiper('.buteegdehuun-swiper-container', {
      pagination: {
        el: '.buteegdehuun-swiper-pagination',
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  <!-- Initialize buteegdehuun gallery swipe -->
  <script>
      lightGallery(document.getElementById('buteegdehuun-lightgallery'));
  </script>

  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection


