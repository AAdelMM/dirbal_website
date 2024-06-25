@extends('homePage.test')

@section('title','كتاب')

@section('content')

<div class="SubMaba7ith w-[100vw] h-[220rem] overflow-hidden relative">
  <div class="Frame333 left-0 top-0 absolute flex-col justify-start items-center inline-flex">
    <div class="Home w-[100vw] 2xl:h-[32.8rem] h-[25rem] relative">
      <img class="Ist w-[100vw] 2xl:h-[32.8rem] h-[25rem] left-0 top-0 absolute" src="{{ asset('images/ktabbg.png') }}" />
      <div class="Frame288 2ءxl:w-[72.8vw] lg:w-[65vw] w-[48vw] 2xl:h-[17.6rem] h-[15rem] left-[390.43px] 2xl:top-[145px] top-[115px] absolute flex-col justify-start items-end gap-[69px] inline-flex">
        <div class=" w-[46.6vw]  2xl:h-[101px] h-[50px] text-right text-[#BB941A] 2xl:text-[6rem] lg:text-[4rem] text-[3rem] font-normal leading-relaxed" style="font-family:'Noto Kufi Arabic';">كتاب</div>
        <div class=" w-[74.8vw]  text-justify text-gray-900 2xl:text-[40px] lg:text-[2rem] text-[1.5rem] font-normal " style="font-family:'El Messiri'; direction:rtl;">القانون الليبي هو المرجع في الأعمال، لكن قدراً غير يسير منها يتوافق مع قوانين دول عربية لاسيما المصري، المصدر التاريخي للقانون الليبي ولكثير من القوانين العربية. تيسيراً للزائر في معرفة مدى تعلق العمل باهتمامه،</div>
      </div>


<!--header black-->

      <div class="HeaderHome w-[54vw] 2xl:h-[7.8rem] lg:h-[5.5em] h-[4rem] 2xl:left-[60.57px] lg:left-[2.7em] left-[1.5rem] top-0 absolute">
    <div class="Line w-[89.3vw]  h-[0px] left-[8.72px] 2xl:top-[113px] lg:top-[4.9em] top-[3.2rem] absolute border border-gray-900"></div>
   
        
        <div class="Logo left-0 2xl:top-[14px] lg:top-[0.6em] top-[0.4rem] absolute justify-center items-center 2xl:gap-2.5 lg:gap-1.5 gap-1 inline-flex">
          <div class="Group47 2xl:w-[17rem] lg:w-[9.3rem] w-[5.3rem] 2xl:h-[76px] xl:h-[3.3em] relative">
<a href="{{ url('/') }}">
 <img class="A1 2xl:w-[17rem] lg:w-[9em] w-[7rem] 2xl:h-[76px] lg:h-[3.3em] h-[2.6rem] left-0 lg:top-0 top-[-1.4rem] absolute" src="{{ asset('images/48.png') }}" />
 </a>
          </div>
         
        </div>
        <div class="Frame43 2xl:left-[77vw] lg:left-[73vw] left-[79vw]  2xl:top-[27px] lg:top-[1.2em] top-[0.6rem] absolute justify-center items-center 2xl:gap-[15px] xl:gap-[1em] inline-flex">
          <div class="Icons8Bookmark1 2xl:w-[38.64px] lg:w-[1.6em] w-[1.2rem] 2xl:h-[54.21px] lg:h-[2.3em] h-[1.8rem] relative">
          
            <div class="Ellipse3 2xl:w-[25px] lg:w-[1.1em] w-[0.8rem] 2xl:h-[25px] lg:h-[1.1em] h-[0.8rem] 2xl:left-[13.64px] lg:left-[0.6em] left-[0.4rem] 2xl:top-0 lg:top-[-0.4em] top-[-0.2rem] absolute bg-red-600 rounded-full"></div>
            <div class=" 2xl:w-2 lg:w-1 w-0.5 lg:h-[19px] h-[15px] 2xl:left-[20.5px] lg:left-[1em] left-[0.5rem] 2xl:top-[-3px] lg:top-[-0.6em] top-[-0.4rem] absolute  text-white 2xl:text-[1.25em] lg:text-[0.9em] text-[0.6rem] font-normal " style="font-family:'Arial';">3</div>  
          </div>
          
          <!-- <img class=" favorite cursor-pointer" src="{{ asset('images/fav.png') }}" alt="fav"> -->
          <img class="favorite cursor-pointer" src="{{ asset('images/fav.png') }}" alt="fav" onclick="redirectToFavorite()">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-gray-900"></div>
          <div class="Icons8Search11 2xl:w-10 lg:w-8 w-6 2xl:h-10 lg:h-8 h-6 relative"></div>
          <img class="searchIcon cursor-pointer" src="{{ asset('images/search.svg') }}" alt="search">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-gray-900"></div>
          <div class="Icons8Menu11 2xl:w-10 lg:w-8 w-6 2xl:h-10 lg:h-8 h-6  relative"></div>
          <img id="menuIcon" class="menuIcon cursor-pointer" src="{{ asset('images/menu.svg') }}" alt="menu">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-gray-900"></div>
          
        </div>
      </div>
</div>
<!--end of header-->


<div class="Body w-[100vw] h-[3066px] overflow-hidden relative">
  <img class="174 w-[100vw] h-[3066px] left-0 top-0 absolute bg-[#161D27]" src="{{ asset('images/ktabmainbg.png') }}" />
  <div class="NextPrevious w-[405.42px] h-[61px] left-[38.7vw] top-[2925px] absolute justify-start items-start gap-2.5 inline-flex">
    <div class="ButtonLeft w-[60px] h-[60px] p-4 bg-orange-400 rounded-[3px] border border-orange-400 justify-center items-center gap-2 flex">
      <div class="IconsAddLine origin-top-left -rotate-180 justify-start items-start gap-2.5 flex"></div>
    </div>
    <div class="Frame60 justify-center items-center gap-2.5 flex">
      <div class=" w-[45px] h-[61px] text-center text-white text-[35px] font-normal  leading-[18px]">10</div>
    </div>
    <div class="Frame59 justify-center items-center gap-2.5 flex">
      <div class=" w-[45px] h-[61px] text-center text-white text-[35px] font-normal  leading-[18px]">9</div>
    </div>
    <div class="Frame58 justify-center items-center gap-2.5 flex">
      <div class=" w-[45px] h-[61px] text-center text-white text-[35px] font-normal  leading-[18px]">...</div>
    </div>
    <div class="Frame57 justify-center items-center gap-2.5 flex">
      <div class=" w-[45px] h-[61px] text-center text-white text-[35px] font-normal  leading-[18px]">2</div>
    </div>
    <div class="Frame56 justify-center items-center gap-2.5 flex">
      <div class=" w-[45px] h-[61px] text-center text-white text-[35px] font-normal  leading-[18px]">1</div>
    </div>
    <div class="ButtonRight w-[60px] h-[60px] relative">
      <div class="Button w-[60px] h-[60px] p-4 left-[-0.27px] top-[-1px] absolute bg-orange-400 rounded-[3px] border border-orange-400 justify-center items-center gap-2 inline-flex">
        <div class="IconsAddLine justify-start items-start gap-2.5 flex"></div>
      </div>
    </div>

  </div>
  
  <div class="Group15 w-[99vw] h-[115px] left-[10.01px] top-[8px] absolute">
    <div class="RsLayer w-[99vw] h-[3px] left-0 top-[6px] absolute bg-orange-400"></div>
    <div class="RsLayer w-[99vw] h-[3px] left-0 top-[110px] absolute bg-orange-400"></div>
    <div class="Frame16 w-[60.3vw] h-[115px] left-[22.6vw] top-0 absolute justify-center items-center 2xl:gap-[220px] lg:gap-[150px] gap-[100px] inline-flex">
      <div class=" w-[313px] h-[59px] text-center text-orange-300 2xl:text-[50px] lg:text-[40px] text-[25px] font-bold font-['Amiri'] leading-relaxed">قبس من كتاب</div>
      <div class=" w-[625px] h-[69px] text-center text-white 2xl:text-[50px] lg:text-[40px] text-[25px] font-bold font-['Amiri']">سلسلة دربال للكتب الصوتية</div>
    </div>
    <div class="Line41 w-[28.6vw] h-[0px] left-[51.9vw] top-[113px] absolute shadow border-2 border-orange-400"></div>
    <div class="Line42 w-[28.6vw] h-[0px] left-[51.9vw] top-[9px] absolute shadow border-2 border-orange-400"></div>
  </div>

  <div class="flex flex-col justify-center">
  <!--row start-->
  <div class="Frame264 w-[96.5vw] h-[2477px] left-[35.04px] top-[193px] absolute flex-col justify-start items-center gap-[15px] inline-flex">
    <div class="BookReader w-[96.4vw] h-[341px] relative">
      <div class="Vid2 w-[90.7vw] h-[306px] left-[51px] top-[35px] absolute">
        <div class="Frame270 w-[90.7vw] h-[306px] left-0 top-0 absolute">
          <div class=" w-[73.17vw] h-[119px] lg:left-[17.5vw] left-[12vw] top-0 absolute text-right text-orange-400 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] font-bold  uppercase lg:leading-[65px] leading-[40px]" style="font-family:'Noto Kufi Arabic';">8 ك ص د: العالمانية، طاعون العصر، د. سامي عامري (الفصل الأخير: الصورة الدِّعائية للعالمانية)</div>
          <div class="Line36 w-[70.8vw] h-[0px] lg:left-[90.7vw] left-[85vw] top-[9rem] absolute origin-top-left rotate-180 border border-gray-200"></div>
          <div class=" lg:w-[51.6vw] w-[60vw] lg:left-[39.1vw] left-[25vw]   top-[9rem] absolute text-right text-white 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] font-normal  uppercase leading-[65px]" style="font-family:'El Messiri';direction:rtl">يأتي هذا الكتاب ضمن سلسلة المؤلف القيِّمة: الإلحادُ في الميزان.</div>
        </div>
        <img class="Df436b454f00AbbfA8bf4811d3901 w-[13vw] h-[13vw] left-0 top-0 absolute" src="{{ asset('images/bookth.png') }}" />
        <div class="Line37 w-[90.7vw] h-[0px] left-[90.7vw] top-[282px] absolute origin-top-left rotate-180 border border-gray-200"></div>
      </div>
    </div>
<!--row end-->

<!--row start-->
<div class="Frame264 w-[96.5vw] h-[2477px]  top-[20rem] absolute flex-col justify-start items-center gap-[15px] inline-flex">
    <div class="BookReader w-[96.4vw] h-[341px] relative">
      <div class="Vid2 w-[90.7vw] h-[306px] left-[51px] top-[35px] absolute">
        <div class="Frame270 w-[90.7vw] h-[306px] left-0 top-0 absolute">
          <div class=" w-[73.17vw] h-[119px] lg:left-[17.5vw] left-[12vw] top-0 absolute text-right text-orange-400 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] font-bold  uppercase lg:leading-[65px] leading-[40px]" style="font-family:'Noto Kufi Arabic';">8 ك ص د: العالمانية، طاعون العصر، د. سامي عامري (الفصل الأخير: الصورة الدِّعائية للعالمانية)</div>
          <div class="Line36 w-[70.8vw] h-[0px] lg:left-[90.7vw] left-[85vw] top-[9rem] absolute origin-top-left rotate-180 border border-gray-200"></div>
          <div class=" lg:w-[51.6vw] w-[60vw] lg:left-[39.1vw] left-[25vw]   top-[9rem] absolute text-right text-white 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] font-normal  uppercase leading-[65px]" style="font-family:'El Messiri';direction:rtl">يأتي هذا الكتاب ضمن سلسلة المؤلف القيِّمة: الإلحادُ في الميزان.</div>
        </div>
        <img class="Df436b454f00AbbfA8bf4811d3901 w-[13vw] h-[13vw] left-0 top-0 absolute" src="{{ asset('images/bookth.png') }}" />
        <div class="Line37 w-[90.7vw] h-[0px] left-[90.7vw] top-[282px] absolute origin-top-left rotate-180 border border-gray-200"></div>
      </div>
    </div>
<!--row end-->

<!--row start-->
<div class="Frame264 w-[96.5vw] h-[2477px]  top-[20rem] absolute flex-col justify-start items-center gap-[15px] inline-flex">
    <div class="BookReader w-[96.4vw] h-[341px] relative">
      <div class="Vid2 w-[90.7vw] h-[306px] left-[51px] top-[35px] absolute">
        <div class="Frame270 w-[90.7vw] h-[306px] left-0 top-0 absolute">
          <div class=" w-[73.17vw] h-[119px] lg:left-[17.5vw] left-[12vw] top-0 absolute text-right text-orange-400 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] font-bold  uppercase lg:leading-[65px] leading-[40px]" style="font-family:'Noto Kufi Arabic';">8 ك ص د: العالمانية، طاعون العصر، د. سامي عامري (الفصل الأخير: الصورة الدِّعائية للعالمانية)</div>
          <div class="Line36 w-[70.8vw] h-[0px] lg:left-[90.7vw] left-[85vw] top-[9rem] absolute origin-top-left rotate-180 border border-gray-200"></div>
          <div class=" lg:w-[51.6vw] w-[60vw] lg:left-[39.1vw] left-[25vw]   top-[9rem] absolute text-right text-white 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] font-normal  uppercase leading-[65px]" style="font-family:'El Messiri';direction:rtl">يأتي هذا الكتاب ضمن سلسلة المؤلف القيِّمة: الإلحادُ في الميزان.</div>
        </div>
        <img class="Df436b454f00AbbfA8bf4811d3901 w-[13vw] h-[13vw] left-0 top-0 absolute" src="{{ asset('images/bookth.png') }}" />
        <div class="Line37 w-[90.7vw] h-[0px] left-[90.7vw] top-[282px] absolute origin-top-left rotate-180 border border-gray-200"></div>
      </div>
    </div>
<!--row end-->



</div>
</div>
@yield('content')
@include('homePage.footer')
    
</div>