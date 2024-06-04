<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Zahra Arabic:wght@400;700&display=swap"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

      @font-face {
        font-family: 'Zahra Arabic'; /* Replace with your font name */
        src: url("{{asset('fonts/18618-zahra.arabic.otf')}}") format('truetype'),
            url("{{asset('fonts/ZahraArabic-Regular.woff')}}") format('woff'); /* Include formats for wider browser compatibility */
      }
    </style>
</head>
<body>
   <!--sectiom-1 Main Start--> 
   <div class="Home w-[1920px] h-[935px] relative">
  <img class="Adfinal2 w-[1920px] h-[935px] left-0 top-0 absolute" src="{{ asset('images/homeHero.png') }}" />
  <img class="659 w-[859.11px] h-[407.44px] left-[55.94px] top-[253.27px] absolute shadow" src="{{ asset('images/heroquran.png') }}" />
  <div class="AccessibilityBoutton w-[58.85px] h-[59.06px] left-[60.85px] top-[856.92px] absolute">
    <div class="Ellipse4 w-[60px] h-[60px] left-0 top-0 absolute bg-cyan-600 rounded-full border-2 border-white"></div>
  </div>
  <div class="ContentCarrousol w-[1918px] h-[816px] left-[2px] top-[118.98px] absolute">
    <div class="Light w-[894px] px-[52px] py-[60px] left-[919px] top-[120px] absolute bg-white/opacity-40 rounded-xl shadow border border-gray-700/opacity-50 flex-col justify-center items-end gap-8 inline-flex">
      <div class="Frame280 w-[790px] h-[170px] relative">
        <img class="Rectangle452 w-[309px] h-[170px] left-0 top-0 absolute rounded-md" src="{{ asset('images/judge.jpg') }}" />
        <div class=" w-[790px] left-0 top-[104px] absolute text-right text-yellow-700 text-[55px] font-bold " style="font-family:'Zahra Arabic">قبسات</div>
      </div>
      <div class="Divider w-[782px] h-px bg-gray-700/opacity-50"></div>
      <div class=" w-[782px] text-justify text-gray-900 text-[40px] font-normal "style="font-family:'Zahra Arabic">    إنه لمن سوء الحظ ألا ندرك ما يراد بنا، فيصرفوننا عما ينبغي أن نفكر فيه من مصير مجتمعنا أو أفكر فيه أنا من مصيري كإنسان، إلى أن نفكر في أشياء نحسبها راقية جداً .     </div>
      <div class=" w-[790px] text-yellow-700 text-[25px] font-bold "style="font-family:'Zahra Arabic">المصدر : كتاب القانون المدني</div>
    </div>
  </div>
  <div class="HeaderHome w-[1721.93px] h-[125.13px] left-[99.89px] top-0 absolute">
    <div class="Line w-[1715px] h-[0px] left-[8.72px] top-[113px] absolute border border-gray-900"></div>
    <div class="Group20 w-[253px] h-[110px] left-[723.36px] top-[14px] absolute">
      <img class="FavpngBasmalaQuranIslamicArtArabicCalligraphy1 w-[253px] h-[110px] left-0 top-0 absolute" src="{{ asset('images/bsm.svg') }}" />
      <div class="Rectangle446 w-[270px] h-[127px] left-[-11px] top-[-19px] absolute "></div>
    </div>
    <div class="Logo left-0 top-[14px] absolute justify-center items-center gap-2.5 inline-flex">
      <div class="Group47 w-[206.88px] h-[76px] relative">
        <img class="Aaaaaa1 w-[206.88px] h-[76px] left-0 top-0 absolute" src="{{ asset('images/LOGO.png') }}" />
        <div class="Aaaaaa2 w-[206.88px] h-[76px] left-0 top-0 absolute "></div>
      </div>
      <div class="Line38 w-[70px] h-[0px] origin-top-left -rotate-90 border border-gray-700"></div>
      <img class="Aa1 w-[67px] h-[85px]" src="{{ asset('images/favicon.png') }}" />
    </div>
    <div class="Frame43 left-[1483px] top-[27px] absolute justify-center items-center gap-[23px] inline-flex">
      <div class="Icons8Bookmark1 w-[38.64px] h-[54.21px] relative">
        <div class="Ellipse3 w-[25px] h-[25px] left-[13.64px] top-0 absolute bg-red-600 rounded-full"></div>
        <div class=" w-2 h-[19px] left-[21.64px] top-[-8px] absolute  text-white text-3xl font-normal " style="font-family:'Zahra Arabic">3</div>  
      </div>
      <img src="{{ asset('images/fav.png') }}" alt="fav">
      <div class="SpanMkdVerticalSeparator w-px h-12 border-r border-gray-900/opacity-50"></div>
      <div class="Icons8Search11 w-10 h-10 relative"></div>
      <img src="{{ asset('images/search.svg') }}" alt="search">
      <div class="SpanMkdVerticalSeparator w-px h-12 border-r border-gray-900/opacity-50"></div>
      <div class="Icons8Menu11 w-10 h-[35px] relative"></div>
      <img src="{{ asset('images/menu.svg') }}" alt="menu">
      <div class="SpanMkdVerticalSeparator w-px h-12 border-r border-gray-900/opacity-50"></div>
      
    </div>
  </div>
  <div class="SwitchRtf w-[1918px] h-[60.06px] left-[-0px] top-[440.45px] absolute">
    <div class="AngleLeft w-[60px] h-[60px] left-[60px] top-[60px] absolute origin-top-left -rotate-180 bg-zinc-300/opacity-50"></div>
    <div class="AngleRight w-[60px] h-[60px] left-[1860px] top-0 absolute bg-zinc-300/opacity-50"></div>
  </div>
</div>
   <!--sectiom-1 Main End-->
   <!--sectiom-2 Start-->
   <!--sectiom-2 End-->
  <!--sectiom-3 last topic-->

<!--end of section 3-->
</body>
</html>
