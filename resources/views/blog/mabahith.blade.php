@extends('homePage.test')

@section('title','مباحث')

@section('content')

<div class="SubMaba7ith w-[100vw] h-[220rem] overflow-hidden relative">
  
@yield('content')
  <div class="Frame333 left-0 top-0 absolute flex-col justify-start items-center inline-flex">
    <div class="Home w-[100vw] 2xl:h-[32.8rem] h-[25rem] relative">
    @include('homePage.menu')
      <img class="Ist w-[100vw] 2xl:h-[32.8rem] h-[25rem] left-0 top-0 absolute overflow-hidden" src="{{ asset('images/mabahithhome.png') }}" />
      <div class="Frame288 2ءxl:w-[72.8vw] lg:w-[65vw] w-[48vw] 2xl:h-[17.6rem] h-[15rem] left-[390.43px] 2xl:top-[145px] top-[115px] absolute flex-col justify-start items-end gap-[69px] inline-flex">
        <div class=" w-[46.6vw]  2xl:h-[101px] h-[50px] text-right text-[#BB941A] 2xl:text-[6rem] lg:text-[4rem] text-[3rem] font-normal leading-relaxed" style="font-family:'Noto Kufi Arabic';">مباحث</div>
        <div class=" w-[74.8vw]  text-justify text-gray-900 2xl:text-[40px] lg:text-[2rem] text-[1.5rem] font-normal " style="font-family:'El Messiri'; direction:rtl;">تضم جملة من الأوراق البحثية في مجال حقوق الإنسان وفروع القانون مع قبسات من شتى الكتب وحفنة من الملخصات التي دفعتني أهمية موضوع الكتاب إلى تلخيصه وإنتاجه صوتياً بسطاً له أمام من يستثقل الكتاب الورقي أو لا يجد له الوقت.</div>
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


    <div class="Body w-[100vw] h-[195rem] relative">
      <img class="25 w-[100vw] h-[195rem] left-0 top-0 absolute bg-[#161D27]" src="{{ asset('images/24.png') }}" />
      <div class="NextPrevious w-[25.3rem] h-[3.8rem] left-[38.7vw] top-[172.8rem] absolute justify-start items-start gap-2.5 inline-flex">
        <div class="ButtonLeft w-[3.75rem] h-[3.75rem] p-4 bg-orange-400 rounded-[3px] border border-orange-400 justify-center items-center gap-2 flex">
          <div class="IconsAddLine origin-top-left -rotate-180 justify-start items-start gap-2.5 flex"></div>
        </div>
        <div class="Frame60 justify-center items-center gap-2.5 flex">
          <div class=" w-[45px] h-[3.8rem] text-center text-white text-[35px] font-normal  leading-[18px]">10</div>
        </div>
        <div class="Frame59 justify-center items-center gap-2.5 flex">
          <div class=" w-[45px] h-[3.8rem] text-center text-white text-[35px] font-normal  leading-[18px]">9</div>
        </div>
        <div class="Frame58 justify-center items-center gap-2.5 flex">
          <div class=" w-[45px] h-[3.8rem] text-center text-white text-[35px] font-normal  leading-[18px]">...</div>
        </div>
        <div class="Frame57 justify-center items-center gap-2.5 flex">
          <div class=" w-[45px] h-[3.8rem] text-center text-white text-[35px] font-normal  leading-[18px]">2</div>
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
      <div class="Group15 w-[99.1vw] h-[107.03px] left-[10.01px] top-[13px] absolute">
        <div class="RsLayer w-[99.1vw] h-[3px] left-0 top-0 absolute bg-orange-400"></div>
        <div class="RsLayer w-[99.1vw] h-[3px] left-0 top-[104.03px] absolute bg-orange-400"></div>
        <div class="Frame16 w-[60.1vw] h-[98.03px] left-[21.2vw] top-[4px] absolute justify-center items-center gap-[75px] inline-flex" style="font-family:'Noto Kufi Arabic';">
          <div class=" w-[25rem] h-[3.7rem] text-center text-[#BD8E55] 2xl:text-[40px] lg:text-[2rem] text-[1.5rem] font-bold  leading-relaxed" >متنوعة</div>
          <div class=" w-[25rem] h-[3.7rem] text-center text-[#BD8E55] 2xl:text-[40px] lg:text-[2rem] text-[1.5rem] font-bold  leading-relaxed">قانونية</div>
          <div class=" w-[25rem] h-[3.7rem] text-center text-white 2xl:text-[40px] lg:text-[2rem] text-[1.3rem] font-bold  leading-relaxed">حقوق الإنسان</div>
        </div>
      </div>


      <div class="Line41 2xl:w-[23.75rem] lg:w-[19rem] w-[15rem] h-[0px] left-[61.7vw]  top-[7.5rem] absolute shadow border-2 border-[#BD8E55]"></div>
      <div class="Line42 2xl:w-[23.75rem] lg:w-[19rem] w-[15rem] h-[0px] left-[61.7vw]  top-[1rem] absolute shadow border-2 border-[#BD8E55]"></div>
      <div class="Frame321 w-[108.9rem] h-[156.9rem] left-[5.6rem] top-[220px] absolute flex-col justify-start items-start gap-5 inline-flex">
       
<!--rows start-->
<div class="flex flex-col justify-center ">

    <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[5rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
       <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
          <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
          <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
          <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
          <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
          <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
          <!--row start-->
    <div class="Frame324 w-[90.7vw] h-[156.9rem]  top-[15rem] absolute flex-col justify-start items-start gap-5 inline-flex">
      <div class="ArticlePost75 w-[90.7vw] h-[13.125rem] 2xl:left-[0rem] left-[-3rem] 2xl:top-[0rem] top-[-3rem] relative">
        <div class="Menu w-[6.75rem] h-[12rem] left-[85.1vw]  absolute">
          <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
            <div class="Frame33   absolute flex-col justify-center items-center  inline-flex" style="font-family:'Noto Kufi Arabic';">
              <div class="18 w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold  leading-[34px]">1-18</div>
              <div class=" w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">2023</div>
            </div>
          </div>
          <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
            <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex"><img src="{{ asset('images/Vector1.png') }}" alt="add to favorite"></div>
          </div>
        </div>
        <div class="Frame37 w-[84.9vw] h-[11.6rem] left-[3px] top-[16px] absolute justify-center items-center  inline-flex">
          <div class="DivMkdPostContentColumn w-[84.9vw] h-[11.6rem] relative">
            <div class="DivMkdPostInfo  2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px]   inline-flex" style="font-family:'Elmessiri'; ">
              <div class=" text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">مدير الموقع</div>
              <div class=" text-white text-[1rem] font-normal  leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
              <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            </div>
            <div class=" w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white"  style="font-family:'El Messiri'; direction:rtl;"><span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]">86 م د:</span><span style="text-white text-6xl  leading-[55px]"> </span><span >دعوى تعويض عن نزع ملكية لمنفعة الشركة العامة للكهرباء ملكية (إجابة – عدم جدوى قرار النزع)</span></div>
          </div>
        </div>
        <div class="Line44 2xl:w-[82.9vw] w-[85vw] h-[0px] left-[6.9vw] top-[14rem] absolute border border-gray-200"></div>
      </div>
      <!--end of content row-->
</div>
@yield('content')
@include('homePage.footer')
    
</div>