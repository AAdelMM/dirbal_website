<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>still testing</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300..700&display=swap" rel="stylesheet"> 
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zahra Arabic:wght@400;700&display=swap"/>
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    <style>
      html{
        width: -moz-available, -webkit-fill-available;
      }
      body{
        width: -moz-available, -webkit-fill-available;
      }
     
    </style>
</head>
<body>
   <!--sectiom-1 Main Start--> 
<div class="container-fluid ">
<div class="Home w-screen h-screen relative">
      <img class="HeroBg w-screen h-screen left-0 top-0 bg-cover" src="{{ asset('images/homeHero.png') }}" />
      <img class="HeroQuran 2xl:w-[53em] xl:w-[37.1em] 2xl:h-[25.5em] xl:h-[17.9em] md:w-[20em] md:h-[8em]  2xl:top-[20em] xl:top-[15em] md:top-[8em] absolute shadow" src="{{ asset('images/heroquran.png') }}" />
      <div class="w-[31vw] h-[5.5vh]  left-[3.7vw] top-[85vh] absolute">
        <div class="Ellipse4 w-[3.75em] h-[3.75em] left-0 top-0 absolute bg-cyan-600 rounded-full border-2 border-white"></div>
      </div>
      <div class="ContentCarrousol w-[99vw] 2xl:h-[816px] xl:h-[35.7em] 2xl:left-[2px] xl:left-[1.4px] 2xl:top-[118.98px] xl:top-[5.2em] absolute">
        <!--quotes start-->
        <div class="quotes 2xl:w-[894px] xl:w-[39.1em] 2xl:px-[52px] xl:px-[2.3em] 2xl:py-[60px] xl:py-[2.7em] 2xl:left-[919px] xl:left-[41em] 2xl:top-[120px] xl:top-[5.3em] absolute bg-white/opacity-40 rounded-xl shadow border border-gray-700/opacity-50 flex-col justify-center items-end 2xl:gap-8 xl:gap-4 inline-flex">
          <div class="Frame280 2xl:w-[790px] xl:w-[35.3em] 2xl:h-[170px] xl:h-[7.4em] relative">
            <img class="Rectangle452 2xl:w-[309px] xl:w-[13.5em] 2xl:h-[170px] xl:h-[7.4em] left-0 top-0 absolute rounded-md" src="{{ asset('images/judge.jpg') }}" />
            <div class=" 2xl:w-[790px] xl:w-[15em] left-0 2xl:top-[104px] xl:top-[2em] absolute text-right text-yellow-700 2xl:text-[55px] xl:text-[2.4em] font-bold " style="font-family:'El Messiri';">قبسات</div>
          </div>
          <div class="Divider 2xl:w-[782px] xl:w-[34.2em] h-px bg-gray-700/opacity-50"></div>
          <div class=" 2xl:w-[782px] xl:w-[28em] text-justify text-gray-900 2xl:text-[40px] xl:text-[20px] font-normal " style="font-family:'El Messiri';direction:rtl;">    إنه لمن سوء الحظ ألا ندرك ما يراد بنا، فيصرفوننا عما ينبغي أن نفكر فيه من مصير مجتمعنا أو أفكر فيه أنا من مصيري كإنسان، إلى أن نفكر في أشياء نحسبها راقية جداً .     </div>
          <div class=" 2xl:w-[790px] xl:w-[28em]  text-yellow-700 2xl:text-[25px] xl:text-[20px] font-bold "style="font-family:'Marhey'; ">المصدر : كتاب القانون المدني</div>
        </div>
        <!--quotes end-->
      </div>
      <div class="HeaderHome 2xl:w-[1037.46px] xl:w-[45.39em] md:w-[20em] md:h-[2.5] 2xl:h-[125.13px] xl:h-[5.5em] 2xl:left-[60.57px] xl:left-[2.7em] top-0 absolute">
    <div class="Line 2xl:w-[1715px] xl:w-[79em] md:w-[20em] h-[0px] left-[8.72px] 2xl:top-[113px] xl:top-[4.9em] absolute border border-gray-900"></div>
    <div class="Group20 2xl:w-[253px] xl:w-[11.1em] 2xl:h-[110px] xl:h-[4.8em] 2xl:left-[723.36px] xl:left-[31.7em] 2xl:top-[14px] xl:top-[0.6em] absolute">
      <img class=" 2xl:w-[253px] xl:w-[11.1em] 2xl:h-[110px] xl:h-[4.8em] left-0 top-0 absolute" src="{{ asset('images/bsm.svg') }}" />
      <div class="Rectangle446 w-[270px] h-[127px] 2xl:left-[-11px] xl:left-[-0.5em] top-[-19px] absolute "></div>
    </div>
        
        <div class="Logo left-0 2xl:top-[14px] xl:top-[0.6em] absolute justify-center items-center 2xl:gap-2.5 xl:gap-1.5 inline-flex">
          <div class="Group47 2xl:w-[206.88px] xl:w-[9em] 2xl:h-[76px] xl:h-[3.3em] relative">
            <img class="Aaaaaa1 2xl:w-[206.88px] xl:w-[9em] 2xl:h-[76px] xl:h-[3.3em] left-0 top-0 absolute" src="{{ asset('images/LOGO.png') }}" />
            <div class="Aaaaaa2 2xl:w-[206.88px] xl:w-[9em] 2xl:h-[76px] xl:h-[3.3em] left-0 top-0 absolute "></div>
          </div>
          <div class="Line38 2xl:w-[70px] xl:w-[3.1em] h-[0px] 2xl:mt-[80px] xl:mt-[3em] origin-top-left -rotate-90 border border-gray-700"></div>
          <img class="Aa1 2xl:w-[67px] xl:w-[2.9em] 2xl:h-[85px] xl:h-[3.7em]" src="{{ asset('images/favicon.png') }}" />
        </div>
        <div class="Frame43 2xl:left-[1483px] xl:left-[64.9em] 2xl:top-[27px] xl:top-[1.2em] absolute justify-center items-center 2xl:gap-[15px] xl:gap-[1em] inline-flex">
          <div class="Icons8Bookmark1 2xl:w-[38.64px] xl:w-[1.6em] 2xl:h-[54.21px] xl:h-[2.3em] relative">
            <div class="Ellipse3 2xl:w-[25px] xl:w-[1.1em] 2xl:h-[25px] xl:h-[1.1em] 2xl:left-[13.64px] xl:left-[0.6em] 2xl:top-0 xl:top-[-0.4em] absolute bg-red-600 rounded-full"></div>
            <div class=" 2xl:w-2 xl:w-1 h-[19px] 2xl:left-[20.5px] xl:left-[1em] 2xl:top-[-3px] xl:top-[-0.6em] absolute  text-white 2xl:text-[1.25em] xl:text-[0.9em] font-normal " style="font-family:'Arial';">3</div>  
          </div>
          <img src="{{ asset('images/fav.png') }}" alt="fav">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 xl:h-10 border-r border-gray-900"></div>
          <div class="Icons8Search11 2xl:w-10 xl:w-8 2xl:h-10 xl:h-8 relative"></div>
          <img src="{{ asset('images/search.svg') }}" alt="search">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 xl:h-10 border-r border-gray-900"></div>
          <div class="Icons8Menu11 2xl:w-10 xl:w-8 2xl:h-10 xl:h-8  relative"></div>
          <img src="{{ asset('images/menu.svg') }}" alt="menu">
          <div class="SpanMkdVerticalSeparator w-px h-12 border-r border-gray-900"></div>
          
        </div>
      </div>
      <div class="SwitchRtf w-[1918px] h-[60.06px] left-[-0px] top-[440.45px] absolute">
        <div class="AngleLeft w-[60px] h-[60px] left-[60px] top-[60px] absolute origin-top-left -rotate-180 bg-zinc-300/opacity-50"></div>
        <div class="AngleRight w-[60px] h-[60px] left-[1860px] top-0 absolute bg-zinc-300/opacity-50"></div>
      </div>
</div>
</div>
   <!--sectiom-1 Main End-->
   <!--sectiom-2 Start-->
   <!--sectiom-2 End-->
  <!--sectiom-3 last topic-->

<!--end of section 3-->
</body>
</html>