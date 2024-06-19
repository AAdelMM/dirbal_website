<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>@yield('title','Dirbal')</title>  
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
    <div class="container-fluid flex justify-end h-auto">
  <div class="Menu lg:w-[31.8vw] h-[120vh] w-[45vw]  relative">
  <div class="Rectangle438 lg:w-[31.8vw] w-[45vw] lg:h-[120vh] h-[100vh] left-0 top-0 absolute bg-gray-800"></div>
  <div class="Frame9 2xl:left-[11.6rem] lg:left-[8rem] left-[4.6rem] 2xl:top-[11.25rem] lg:top-[8rem] top-[4.6rem] absolute flex-col justify-start items-end gap-5 inline-flex">
    <div class="Principal flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] inline-flex">
        <div class=" w-[233px] text-right text-white text-6xl font-normal lg:text-[3rem] text-[2rem] " style="font-family:'Noto Kufi Arabic';">الرئيسية</div>
        <img class="pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/arrowLeft.png') }}" alt="arrow">
      </div>
    </div>
    <div class="Judge flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] inline-flex">
        <div class=" w-[233px] cursor-pointer text-right text-white text-6xl font-normal lg:text-[3rem] text-[2rem] " style="font-family:'Noto Kufi Arabic';">القضاء</div>
        <img class="arrow  pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/arrowLeft.png') }}" alt="arrow">
      </div>
      <div class="submenu hidden flex-col text-[#E1C478] text-[2rem] gap-[20px] my-[5px] "  style="font-family:'Noto Kufi Arabic';direction:rtl;">
          <div class="submenu-item inline-flex items-center "><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>المحكمة</span></div>
          
          <div class="submenu-item inline-flex items-center "> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>النيابة العامة</span></div>
          <div class="submenu-item inline-flex items-center "> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>معهد القضاء</span></div>
       </div>
    </div>
    <div class="Tribunal overflow-hidden flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] inline-flex">
        <div class=" text-center cursor-pointer text-white text-6xl font-normal lg:text-[3rem] text-[2rem] " style="font-family:'Noto Kufi Arabic';">المحكمة العليا</div>
        <img class=" arrow pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/arrowLeft.png') }}" alt="arrow">
      </div>
      <div class="submenu hidden  flex-col text-[#E1C478] text-[2rem] gap-[20px] my-[5px] "  style="font-family:'Noto Kufi Arabic';direction:rtl;">
          <div class="submenu-item inline-flex items-center "> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>أحكام</span></div>
          
          <div class="submenu-item inline-flex items-center "><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>منتقى</span></div>
          <div class="submenu-item inline-flex items-center "> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>شؤؤون فنية</span></div>
       </div>
    </div>
    <div class="Lecture flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] inline-flex">
        <div class=" text-center cursor-pointer text-white text-6xl font-normal lg:text-[3rem] text-[2rem]" style="font-family:'Noto Kufi Arabic';">مدونة</div>
        <img class="arrow pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/arrowLeft.png') }}" alt="arrow">
      </div>
      <div class="submenu hidden flex-col  text-[#E1C478] text-[2rem] gap-[20px] my-[5px] "  style="font-family:'Noto Kufi Arabic';direction:rtl;">
          <div class="submenu-item inline-flex items-center "style="::after" ><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>إسلاميات</span></div>
          
          <div class="submenu-item inline-flex items-center "><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>كتابة</span></div>
          <div class="submenu-item inline-flex items-center "><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><span>مباحث</span></div>
       </div>
    </div>
  </div>
  <div class="Group41 lg:w-[6.4rem] lg:h-[9.6rem] lg:left-[2.2rem] w-[2.56rem] h-[3.8rem] left-[1.2rem] top-[2rem] absolute">
    <img class="CivDMp3Image684x10243 lg:w-[6.4rem] lg:h-[9.6rem] w-[2.56rem] h-[3.8rem] left-0 top-0 absolute" src="{{ asset('images/menu-logo.png') }}" />
    
  </div>
  <img class="menu-ayah 2xl:w-[34.4rem] w-[13.8rem] 2xl:h-[26.3rem] h-[10.5rem] 2xl:left-[2.4rem] left-[1rem] 2xl:top-[31.5rem] top-[12.6rem] absolute" src="{{ asset('images/menu-ayah.png') }}" />
  <div class="menu-Close cursor-pointer 2xl:w-[5.2rem] w-[2.08rem] 2xl:h-[5.2rem] h-[2.08rem] 2xl:left-[31.25rem] left-[18rem] 2xl:top-[1.25rem] top-[0.5rem] absolute rounded-[20px]">
    <div class="Line13 2xl:w-[2.8rem] w-[1.12rem] h-[0px] 2xl:left-[1.4rem] left-[0.56rem] 2xl:top-[3.7rem] top-[1.48rem] absolute origin-top-left -rotate-45 2xl:border-4 border-2 border-white"></div>
    <div class="Line14 2xl:w-[2.8rem] w-[1.12rem] h-[0px] 2xl:left-[1.7rem] left-[0.68rem] 2xl:top-[1.7rem] top-[0.68rem] absolute origin-top-left rotate-45 2xl:border-4 border-2 border-white"></div>
  </div>
</div>
</div>
  </body>
</html>
