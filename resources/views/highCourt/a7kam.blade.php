@php
use Illuminate\Support\Facades\DB;

$decisions = DB::table('ma7kama_olia')
    ->select('month', 'year', 'title', 'ka3da_title', 'ka3da_text','id','author','topic_number')
    ->get();
@endphp

@extends('homePage.test')

@section('title','أحكام')

@section('content')



<div class="Frame338 w-[100vw] h-[268.6rem] flex-col justify-start items-center inline-flex">
<!--main content-->
@yield('content')

  <div class="Home w-[100vw] h-[32.8rem] relative">
  @include('homePage.menu')
    <img class=" w-[100vw] h-[32.8rem] left-0 top-0 absolute" src="{{ asset('images/50.png') }}" />
    <div class="Frame294 w-[74.8vw] h-[17.6rem] left-[19.8vw] top-[13.4vh] absolute flex-col justify-start items-end gap-[69px] inline-flex">
      <div class=" w-[55.9rem] h-[101px] text-right text-yellow-600 text-[6rem] font-normal " style="font-family:'Noto Kufi Arabic'"> المحكمة العليا</div>
      <div class=" w-[84.8vw]  text-white text-[2rem] font-normal  " style="font-family:'El Messiri'; direction:rtl;">القانون الليبي هو المرجع في الأعمال، لكن قدراً غير يسير منها يتوافق مع قوانين دول عربية لاسيما المصري، المصدر التاريخي للقانون الليبي ولكثير من القوانين العربية. تيسيراً للزائر في معرفة مدى تعلق العمل باهتمامه،</div>
    </div>
<!--main content end-->

    <!--Header white-->
    <div class="HeaderHome w-[54vw] 2xl:h-[7.8rem] lg:h-[5.5em] h-[4rem] 2xl:left-[60.57px] lg:left-[2.7em] left-[1.5rem] top-0 absolute">
    <div class="Line w-[89.3vw]  h-[0px] left-[8.72px] 2xl:top-[113px] lg:top-[4.9em] top-[3.2rem] absolute border border-white"></div>


        <div class="Logo left-0 2xl:top-[14px] lg:top-[0.6em] top-[0.4rem] absolute justify-center items-center 2xl:gap-2.5 lg:gap-1.5 gap-1 inline-flex">
          <div class="Group47 2xl:w-[14rem] lg:w-[9.8rem] w-[8rem] 2xl:h-[76px] xl:h-[3.3em] relative">
<!----> 
          <a href="{{ url('/') }}">
<img class="Aaaaaa1 2xl:w-[14rem] lg:w-[9.8rem] w-[8rem] 2xl:h-[76px] lg:h-[3.3em] h-[2.6rem] left-0  top-[0rem] absolute" src="{{ asset('images/48.png') }}" />
            </a> </div>
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


    <div class="Group15 w-[98.9vw] h-[6.7rem] left-[9px] top-[13px] absolute">
      <div class="RsLayer w-[98.9vw] h-[0.19rem] left-0 top-0 absolute bg-[#C18F59]"></div>
      <div class="RsLayer w-[98.9vw] h-[0.19rem] left-0 top-[6.5rem] absolute bg-[#C18F59]"></div>
      <div class="Frame16 w-[98.9vw] h-[6.125rem] left-0 top-[0.25rem] 2xl:text-[2rem] text-[1.5rem] absolute justify-center items-center gap-[125px] inline-flex" style="font-family:'Noto Kufi Arabic';">

        <div class=" text-center text-orange-300 items-center flex font-bold cursor-pointer leading-relaxed">شؤون فنية</div>
        <div class=" text-center text-orange-300 items-center flex font-bold cursor-pointer leading-relaxed">منتقى</div>
        <div class=" text-center text-white cursor-pointer items-center flex font-bold border-y-4  border-orange-200 h-[6.6rem] leading-relaxed">أحكام</div>
      </div>
    </div>

    <div class="content-rows flex flex-col">
    @foreach($decisions as $decision)
    <!--row start-->
    <div class="decision-row w-[90.7vw] relative flex flex-col justify-start items-start gap-5 mb-8 mt-[10rem]">
        <div class="ArticlePost75 w-[90.7vw] relative cursor-pointer" onclick="toggleExtend({{ $decision->id }})">
            <div class="Menu w-[6.75rem] h-[12rem] absolute right-0 top-0">
                <div class="PostInfoDate w-[5.6rem] h-[5.6rem] left-[1px] top-[2px] flex items-center absolute border border-white">
                    <div class="Frame33 absolute flex-col justify-center items-center inline-flex" style="font-family:'Noto Kufi Arabic';">
                        <div id="day" class="w-[5.6rem] h-[2rem] text-center text-[#C18F59] text-[2.15rem] font-bold leading-[34px]">{{ $decision->month }}</div>
                        <div id="year" class="w-[5.6rem] h-[2rem] text-center text-gray-200 text-[2.125rem] font-normal leading-tight">{{ $decision->year }}</div>
                    </div>
                </div>
                <div class="DivMkdPostInfoCommentsHolder w-[5.6rem] h-24 left-[1px] top-[91px] absolute border border-gray-200">
                    <div class="Frame34 left-[30.44px] top-[25.50px] absolute flex-col justify-start items-center gap-[3px] inline-flex">
                        <img src="{{ asset('images/Vector1.png') }}" alt="add to favorite">
                    </div>
                </div>
            </div>
            <div class="Frame37 w-[84.9vw] relative justify-center items-center inline-flex ">
                <div class="DivMkdPostContentColumn w-[84.9vw] relative">
                    <div class="DivMkdPostInfo 2xl:left-[73.8vw] lg:left-[70vw] left-[60vw] top-[129px] absolute justify-center items-end gap-[5px] inline-flex" style="font-family:'Elmessiri'; ">
                        <div class="text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">{{ $decision->author }}</div>
                        <div class="text-white text-[1rem] font-normal leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
                        <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
                    </div>
                    <div id="title" class="w-[80.9vw] left-[1.5vw] top-[42px] 2xl:text-[2rem] text-[1.2rem] absolute text-right text-white" style="font-family:'El Messiri'; direction:rtl;">
                        <span class="text-[#FAE1C6] text-[2rem] text-bold leading-[55px]" style="font-family:'El Messiri';">{{ $decision->topic_number}}:</span>
                        <span style="text-white text-6xl leading-[55px]"> </span>
                        <span>{{ $decision->title }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!--ka3da start-->
        <div id="extend-{{ $decision->id }}" class="extend hidden container mx-auto flex flex-col justify-center items-center w-full mt-[10rem]  transition-all duration-300 ease-in-out">
            <div class="border-y-2 border-[#fdba74] flex justify-center items-center 2xl:w-[100%] lg:w-[90%]">
                <h1 class="text-[2rem] text-[#fdba74] 2xl:w-[100%] py-3  lg:w-[80%] text-center">{{ $decision->ka3da_title }}</h1> 
            </div>
            <div class="2xl:w-full lg:w-[80%] text-default-white mt-8">{!! $decision->ka3da_text !!}</div>
            <div class="bg-[#fdba74] text-center p-2 my-5 text-blue-700 2xl:w-[100%] lg:w-[80%]">
                <a href="{{ route('highCourt.a7kam.preview', $decision->id) }}" class="block w-full h-full">واصل القراءة</a>
            </div>
        </div>
        <!--ka3da end-->
    </div>
    <!--end of content row-->
    @endforeach
</div>

<style>

.text-default-white {
    color: white; /* Default text color */
     font-size: 1.8rem;
    font-family:'sakkal majalla';
    direction: rtl;
}

/* Optionally, include any other default styles you might need */
.text-default-white * {
    color: inherit; /* Ensure all child elements inherit the white color */
    text-align:justify;
}


</style>

<script>
function toggleExtend(id) {
    const extendDiv = document.getElementById(`extend-${id}`);
    if (extendDiv.classList.contains('hidden')) {
        extendDiv.classList.remove('hidden',);
    } else {
        extendDiv.classList.add('hidden');
    }
}
</script>
   
    @yield('content')
    @include('homePage.footer')

   @endsection
