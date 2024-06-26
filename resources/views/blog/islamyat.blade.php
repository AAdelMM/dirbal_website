@extends('homePage.test')

@section('title','أسلاميات')

@section('content')



<div class="SubMaba7ith w-[100vw] h-[220rem] overflow-hidden relative">
@yield('content')

  <div class="Frame333 left-0 top-0 absolute flex-col justify-start items-center inline-flex">
    <div class="Home w-[100vw] 2xl:h-[32.8rem] h-[25rem] relative">
    @include('homePage.menu')
      <img class="Ist w-[100vw] 2xl:h-[32.8rem] h-[25rem] left-0 top-0 absolute" src="{{ asset('images/islamyat.png') }}" />
      <div class="Frame288 2ءxl:w-[72.8vw] lg:w-[65vw] w-[48vw] 2xl:h-[17.6rem] h-[15rem] left-[390.43px] 2xl:top-[145px] top-[115px] absolute flex-col justify-start items-end gap-[69px] inline-flex">
        <div class=" w-[46.6vw]  2xl:h-[101px] h-[50px] text-right text-[#BB941A] 2xl:text-[6rem] lg:text-[4rem] text-[3rem] font-normal leading-relaxed" style="font-family:'Noto Kufi Arabic';">إسلاميات</div>
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

<div class="Body w-[100vw] h-[3066px] relative">
    <img class="IslamicPattern08Min2 w-[100vw] h-[191.6rem] left-0  absolute bg-[#161D27]" src="{{ asset('images/court2bg.png') }}" />
    <div class="NextPrevious w-[30rem] h-[3.75rem] left-[30vw]  top-[182.8rem] relative  justify-between items-center gap-2.5 inline-flex">
    
        <div class="ButtonLeft w-[3.75rem] h-[3.75rem] p-4 bg-orange-400  rounded-[3px] border border-orange-400 justify-center items-center gap-2 flex">
            <div class="IconsAddLine origin-top-left -rotate-180 justify-start items-start gap-2.5 flex"></div>
        </div>
        

            <div class="inline-flex relative items-center">
                    <div class="Frame60 justify-center items-center gap-2.5 flex">
                        <div class=" w-[2.8rem] h-[2rem] text-center text-white text-[35px] font-normal  leading-[18px]">10</div>
                    </div>
                    <div class="Frame59 justify-center items-center gap-2.5 flex">
                        <div class=" w-[2.8rem] h-[2rem] text-center text-white text-[35px] font-normal  leading-[18px]">9</div>
                    </div>
                    <div class="Frame58 justify-center items-center gap-2.5 flex">
                        <div class=" w-[2.8rem] h-[2rem] text-center text-white text-[35px] font-normal  leading-[18px]">...</div>
                    </div>
                    <div class="Frame57 justify-center items-center gap-2.5 flex">
                        <div class=" w-[2.8rem] h-[2rem] text-center text-white text-[35px] font-normal  leading-[18px]">2</div>
                    </div>
                    <div class="Frame56 justify-center items-center gap-2.5 flex">
                        <div class=" w-[2.8rem] h-[2rem] text-center text-white text-[35px] font-normal  leading-[18px]">1</div>
                    </div>
            </div>

        <div class="ButtonRight w-[3.75rem] h-[3.75rem] relative">
                <div class="Button w-[3.75rem] h-[3.75rem] p-4 left-[-0.27px] top-[-1px]  bg-orange-400 rounded-[3px] border border-orange-400 justify-center items-center gap-2 inline-flex">
                <div class="IconsAddLine justify-start items-start gap-2.5 flex"></div>
                </div>
        </div>
    </div>
    
<!--secondsection head-->
<div class=" w-[100vw] h-[30rem] flex flex-col items-center  relative">
            
            <div class="Bars w-[315px] h-[87.44px] justify-center  items-center gap-5 inline-flex">
            <div class="DivMkdSeparator w-[97.50px] h-px border-b border-yellow-800"></div>
            <div class="Group77 w-20 h-[87.44px] relative">
                <img class="Images1 w-20 h-[87.44px] left-0  top-0 absolute" src="{{ asset('images/bars.png')}}" />
                <div class="Images2 w-20 h-[87.44px] left-0 top-0 absolute"></div>
            </div>
            <div class="DivMkdSeparator w-[97.50px] h-px border-b border-yellow-800"></div>
            </div>
            <div class=" text-center text-white text-[2rem] font-bold z-[50] mt-[0.7rem] leading-[48.10px]" style="font-family:'El Messiri">التمثيل القانوني في الدعاوى القضائية</div>
           <div class="w-[25vw] h-[2.5rem] mt-[1rem]  inline-flex justify-end"> <img  src="{{ asset('images/headicon.png') }}" alt="line-icon"></div>
           

          </div>

   <div class="content-rows mt-[-11rem] ml-[5vw] flex-col">

      
      <!--row start-->
      <div class="Vid1 w-[90.9vw] h-[374px] relative">
  <img class="H3VideoBackground2Jpg w-[20vw] h-[18vw] left-0 top-[29px] absolute" src="{{ asset('images/videoth.png')}}" />
  <div class="Play w-[3.9vw] h-[3.9vw] left-[7.9vw] top-[8vw] absolute">
    <div class="Rectangle448 w-[3.9vw] h-[3.9vw] left-0 top-0 absolute "><img src="{{ asset('images/PLAY.png')}}" alt="play-button"></div>
  </div>
  <div class="Group44 w-[69.4vw] h-[315px] left-[21.2vw] top-[1px] absolute">
    <div class=" w-[57.5vw] h-[46px] left-[11.9vw] top-0 absolute text-right text-[#CF9455] 2xl:text-[35px] lg:text-[1.5rem] text-[1rem] font-bold  uppercase leading-[65px]" style="font-family:'Noto Kufi Arabic';">رضا أصلان في مواجهة حادة مع (سي أن أن) عن حقوق المرأة في العالم الإسلامي</div>
    <div class="Line36 w-[69.4vw] h-[0px] left-[69.4vw] top-[9rem] absolute origin-top-left rotate-180 border border-gray-200"></div>
    <div class=" w-[69vw] left-[8.78px] top-[9.5rem] absolute text-justify text-white 2xl:text-[25px] text-[1.2rem] font-normal  uppercase leading-10" style="font-family:'El Messiri';direction:rtl;">رضا أصلان، أمريكي مسلم، إيراني الأصل. هاجر في طفولته مع أسرته إلى الولايات المتحدة. ارتد عن الإسلام، وحمل أمه على ذلك. عاد بعد ذلك مسلماً وألف كتابه لا إله إلا الله، ثم كتابه: المتعصب: حياة يسوع الناصري وزمنه. معروف بنشاطه في رد دعاوى أن الإسلام دين إرهاب وأن المسلمين إرهابيون. في هذه المقابلة، يهاجم رضا أسلان مذيعي السي أن أن وينعتهما بالتعصب والغباء بسبب تعميمهما الأحكام على كلِّ الدول الإسلامية استناداً إلى ممارسات تتعلق بالمرأة شائعةٍ في بعض تلك الدول فقط. يعبر بكل وضوح عن رأيه في الرجم وختان الإناث، واصفاً إياهما بالممارسات البربرية لعدم تناسبهما مع الذوق المعاصر، على حد قوله.</div>
    <div class="Frame279 w-[69.3vw] h-[85px] 2xl:left-[1.56px] 2xl:top-[23rem] top-[25rem] absolute justify-between items-center 2xl:gap-[50.6vw] gap-[40.6vw] inline-flex">
      <div class="Menu justify-start items-start flex">
        <div class="DivMkdPostInfoCommentsHolder w-[4.4vw] h-[4.4vw] relative border border-gray-200">
          <div class="Comment py-0.5 left-[17px] top-[17.78px] absolute bg-black/opacity-0 flex-col justify-start items-start gap-2.5 inline-flex"></div>
        </div>
        <div class="AMkdSocialShareDropdownOpener w-[4.4vw] h-[4.4vw] relative border border-white">
          <div class="Share left-[20px] top-[64.78px] absolute justify-start items-start gap-2.5 inline-flex"></div>
        </div>
      </div>
      <div class="Frame29 w-[9.9vw] h-[3.6vw] relative bg-[#CF9455] rounded-sm">
        <div class=" w-[9.9vw] h-[1.2vw]  top-[1.2vw] absolute text-center text-white 2xl:text-[1.1rem] text-[0.8rem] font-bold uppercase leading-[17.60px] inline-flex justify-around" style="font-family:'Noto Kufi Arabic'"><span><img src="{{ asset('images/arrowleft.png')}}" alt=""></span>واصل المشاهدة</div>
      </div>
    </div>
  </div>
  <div class="Line37 w-[90.7vw] h-[0px] left-[90.7vw] 2xl:top-[30rem] top-[32rem] absolute origin-top-left rotate-180 border border-gray-200"></div>

</div>
      <!--end of content row-->


      
</div>
</div>
@yield('content')
@include('homePage.footer')
    
</div>