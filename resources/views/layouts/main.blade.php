<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/lightgallery.css">
    @yield('js-top')
    <title>Оюун ухааны академи</title>
  </head>
  <body>
    <div class="container-fluid">
      @include('layouts.partials.nav')
      @yield('content')
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->

    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/swiper.js"></script>
    <script src="/js/lightgallery.min.js"></script>

    @yield('js')
  </body>
</html>