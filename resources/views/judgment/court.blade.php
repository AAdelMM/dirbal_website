@extends('homePage.test')

@section('title','المحكمة')

@section('content')

<style>
 
 .active-tab {
    transition: all 1.3s ease;
}
.hidden {
    display: none;
}

.content-tab {
    font-size: 1.5rem;
    color: white;
    padding: 1rem;
}

#content-sections {
    direction:rtl;
}
</style>

<div class="Frame338 w-[100vw] h-[268.6rem] flex-col justify-start items-center inline-flex">
<!--main content-->
@yield('content')
  <div class="Home w-[100vw] h-[38rem] relative">
  @include('homePage.menu')
    <img class=" w-[100vw] h-[38rem] left-0 top-0 absolute" src="{{ asset('images/courtPagebg.png') }}" />
    <div class="Frame294 w-[74.8vw] h-[17.6rem] left-[19.8vw] top-[13.4vh] absolute flex-col justify-start items-end gap-[69px] inline-flex">
      <div class=" w-[55.9rem] h-[101px] text-right text-yellow-600 2xl:text-[6rem] lg:text-[4.5rem] text-[3rem] font-normal " style="font-family:'Noto Kufi Arabic'">المحاكم الدنيا</div>
      <div class=" w-[84.8vw] mt-[-2rem] 2xl:mt-0 text-white 2xl:text-[2rem] text-[1rem] lg:text-[1.8rem] font-normal  h-[38rem]" style="font-family:'El Messiri'; direction:rtl;">فهذه مكتبة متواضعة التأمت أجزاؤها من بعض عملي بالمحاكم الدنيا وبالمعهد العالي للقضاء. رجَّحت فائدتها فهأنذا أنشرها.
القانون الليبي مرجع الأحكام، لكن قدراً غير يسير منها يتوافق مع قوانين دول عربية لاسيما المصرية، المصدر التاريخي لجلّ القوانين العربية.
وإذ أضعها بين يدي القارئ الكريم، احتسبها عند الله من الأعمال النافعة التي لا أرتجي من ورائها غير الأجر والثواب. ولْيعلم القارئُ الكريم أن الأحكام القضائية نتاج خبرة قصيرة، وثمرة اجتهاد متواضع يحتمل الصوابَ والخطأ. فإن كان صواباً، فمنَ الله تعالى وبتوفيقه، وإلا فبسبب غفلة أو تقصير. ولئن يمتنع عليَّ إصلاحُ قضاء قضيته أمسِ بَنيتُه على اجتهاد غير سديد، إلا أنه لن يمنع من رجوعي إلى الحقّ وإيثاره مستقبلاً إذا ما هُديت فيه لرشدي. فاللهَ أسألُ المغفرةَ والسداد.</div>
    </div>
<!--main content end-->

    <!--Header-->
    <div class="HeaderHome w-[54vw] 2xl:h-[7.8rem] lg:h-[5.5em] h-[4rem] 2xl:left-[60.57px] lg:left-[2.7em] left-[1.5rem] top-0 absolute">
    <div class="Line w-[89.3vw]  h-[0px] left-[8.72px] 2xl:top-[113px] lg:top-[4.9em] top-[3.2rem] absolute border border-white"></div>
   
        
        <div class="Logo left-0 2xl:top-[14px] lg:top-[0.6em] top-[0.4rem] absolute justify-center items-center 2xl:gap-2.5 lg:gap-1.5 gap-1 inline-flex">
        
        <div class="Group47 2xl:w-[14rem] lg:w-[9.8rem] w-[8rem] 2xl:h-[76px] xl:h-[3.3em] relative">
<!---->     <a href="{{ url('/') }}">
                <img class="Aaaaaa1 2xl:w-[14rem] lg:w-[9.8rem] w-[8rem] 2xl:h-[76px] lg:h-[3.3em] h-[2.6rem] left-0  top-[0rem] absolute" src="{{ asset('images/48.png') }}" />   
            </a>
          </div>
        </div>

        <div class="Frame43 2xl:left-[77vw] lg:left-[73vw] left-[79vw]  2xl:top-[27px] lg:top-[1.2em] top-[0.6rem] absolute justify-center items-center 2xl:gap-[15px] xl:gap-[1em] inline-flex">
          <div class="Icons8Bookmark1 2xl:w-[38.64px] lg:w-[1.6em] w-[1.2rem] 2xl:h-[54.21px] lg:h-[2.3em] h-[1.8rem] relative">
          
            <div class="Ellipse3 2xl:w-[25px] lg:w-[1.1em] w-[0.8rem] 2xl:h-[25px] lg:h-[1.1em] h-[0.8rem] 2xl:left-[13.64px] lg:left-[0.6em] left-[0.4rem] 2xl:top-0 lg:top-[-0.4em] top-[-0.2rem] absolute bg-red-600 rounded-full"></div>
            <div class=" 2xl:w-2 lg:w-1 w-0.5 lg:h-[19px] h-[15px] 2xl:left-[20.5px] lg:left-[1em] left-[0.5rem] 2xl:top-[-3px] lg:top-[-0.6em] top-[-0.4rem] absolute  text-white 2xl:text-[1.25em] lg:text-[0.9em] text-[0.6rem] font-normal " style="font-family:'Arial';">3</div>  
         
        </div>
          
          
          <img class="favorite cursor-pointer" src="{{ asset('images/favw.png') }}" alt="fav" onclick="redirectToFavorite()">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-white"></div>
          <div class="Icons8Search11 2xl:w-10 lg:w-8 w-6 2xl:h-10 lg:h-8 h-6 relative"></div>
          <img class="searchIcon cursor-pointer" src="{{ asset('images/magniw.png') }}" alt="search">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-white"></div>
          <div class="Icons8Menu11 2xl:w-10 lg:w-8 w-6 2xl:h-10 lg:h-8 h-6  relative"></div>
          <img id="menuIcon" class="menuIcon cursor-pointer" src="{{ asset('images/menuw.png') }}" alt="menu">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-white"></div>
          
        </div>
      </div>

<!--menu icon end-->

  </div>
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
    
<!-- Tabs start -->
<div class="Group15 w-[98.9vw] h-[6.7rem] left-[9px] top-[13px] absolute">
    <div class="RsLayer w-[98.9vw] h-[0.19rem] left-0 top-0 absolute bg-[#C18F59]"></div>
    <div class="RsLayer w-[98.9vw] h-[0.19rem] left-0 top-[6.5rem] absolute bg-[#C18F59]"></div>
    <div class="Frame16 w-[98.9vw] h-[6.125rem] left-0 top-[0.25rem] 2xl:text-[2rem] text-[1.5rem] absolute justify-center items-center gap-[125px] inline-flex" style="font-family:'Noto Kufi Arabic';">
        <div class="tab text-center text-orange-300 items-center flex font-bold cursor-pointer leading-relaxed" onclick="switchTab(this, 'tab1')">النيابة العامة</div>
        <div class="tab text-center text-orange-300 items-center flex font-bold cursor-pointer leading-relaxed" onclick="switchTab(this, 'tab2')">قرارات قضائية</div>
        <div class="tab text-center text-orange-300 items-center flex font-bold cursor-pointer leading-relaxed" onclick="switchTab(this, 'tab3')">القضاء الشرعي</div>
        <div class="tab text-center text-orange-300 items-center flex font-bold cursor-pointer leading-relaxed" onclick="switchTab(this, 'tab4')">القضاء الجنائي</div>
        <div class="tab active-tab text-center text-white items-center flex font-bold cursor-pointer border-y-4 border-orange-200 h-[6.6rem] leading-relaxed" onclick="switchTab(this, 'tab5')">القضاء المدني</div>
    </div>
</div>
<!-- Tabs end -->

<!-- Content sections -->
<div id="content-sections" class="content-rows flex-col absolute border-2 border-red-300 w-full top-[10rem] px-10">
    <!--start النيابة العامة-->
    <div id="tab1" class="content-tab hidden">Custom design for النيابة العامة</div>
    <!--end-->

    <!--start قرارات قضائية-->
    <div id="tab2" class="content-tab hidden">Custom design for قرارات قضائية</div>
    <!--end-->

    <!--start القضاء الشرعى-->
    <div id="tab3" class="content-tab hidden">Custom design for القضاء الشرعي</div>
    <!--end-->

    <!--start القضاء الجنائى-->
    <div id="tab4" class="content-tab hidden">Custom design for القضاء الجنائي</div>
    <!--end-->

    <!--start القضاء المدنى-->
    <div id="tab5" class="content-tab   flex gap-4 border-b-2 border-gray-400">
        <div class="date-div border-2 border-orange-300 w-[5%] h-[8vw] flex flex-col items-center justify-center">
            <div class="border-b-2 border-gray-400 w-[100%] h-[50%] flex justify-center items-center">20</div>
            <div class="year w-[100%] h-[50%] flex justify-center items-center">2003</div>
        </div>
        <div class="border-2 border-orange-300 w-[90%] flex flex-col justify-center">
            <div class="topic-title">here will be topic title</div>
            <div class="author-name text-orange-300">author name</div>
        </div>
    </div>
    <!--end-->
</div>

<script>
function switchTab(element, tabId) {
    // Remove active styling from all tabs
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active-tab', 'text-white', 'border-y-4', 'border-orange-200', 'h-[6.6rem]');
        tab.classList.add('text-orange-300');
    });

    // Add active styling to the clicked tab
    element.classList.add('active-tab', 'text-white', 'border-y-4', 'border-orange-200', 'h-[6.6rem]');
    element.classList.remove('text-orange-300');

    // Hide all content sections
    document.querySelectorAll('.content-tab').forEach(tabContent => {
        tabContent.classList.add('hidden');
    });

    // Show the content for the active tab
    document.getElementById(tabId).classList.remove('hidden');
}

</script>
    @yield('content')
    @include('homePage.footer')

   @endsection