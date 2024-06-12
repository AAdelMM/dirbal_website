<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>@yield('title','Dirbal')</title>
    <link rel="stylesheet" href="{{ asset('css/main1.css') }}" />
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
  </head>
  <body>
<!--importing content-->
    @yield('content')

    <!--sectiom-1 Main Start--> 
    @include('homePage.mainHero')
   <!--sectiom-1 Main End-->

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
