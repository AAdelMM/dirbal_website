<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>@yield('title','Dirbal')</title>  
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/footerlogo.png') }}">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=font:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&family=Marhey:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>

  <div class="skeleton-card" id="loadingMessage">
  <div class="loading-message">اهلا بكم  جارى التحميل</div>
  </div>
<!--importing content-->
    @yield('content')

    <!--section-1 Main Start--> 
    <!--carousel container -->
    <div class="carousel-container">
        <div class="carousel-wrapper" id="carouselWrapper">
            <!-- Sections to scroll through -->
            <section class="carousel-section" >@include('homePage.mainHero')</section>
            <section class="carousel-section" >@include('sections.judgment')</section>
            <section class="carousel-section" >@include('sections.highCourt')</section>
            <section class="carousel-section" >@include('sections.blog')</section>
        </div>
        <div class="carousel-nav w-[100vw] h-[3.75rem] flex justify-between left-0 top-[50vh]  absolute">
        <img id="prevArrow" class="cursor-pointer carousel-arrow left-arrow" src="{{ asset('images/carosel-left.png') }}" alt="switch">
        <img id="nextArrow" class="cursor-pointer carousel-arrow right-arrow" src="{{ asset('images/carosel-right.png') }}" alt="switch">
      </div>
    </div>
   
   <!--section-1 Main End-->

   <!--lastTopics Start-->
    @include('homePage.lastTopics')
   <!--lastTopics End-->

  <!--choices -->
    @include('homePage.choices')
<!--end of choices-->

<!--start of section 4-->

      <!--Footer start-->
      @include('homePage.footer')
      <!--Footer end-->

<!--end of section 4-->
 
      

  </body>
</html>
