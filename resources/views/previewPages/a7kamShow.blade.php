@php
use Illuminate\Support\Facades\DB;

$parts = DB::table('mashro3_a7kam')
    ->select('year', 'month', 'ref_number', 'title', 'mogaz', 'ka3da_title', 'ka3da_text', 'dibaga', 'wak3a_text','id',
     'wak3a_text','egraa_title', 'egraa_text', 'reason_title', 'reason_text', '7okm_title', '7okm_text',
     'author','audio_files','pdf_files','topic_letter','topic_no')
    ->get();
@endphp

@extends('homePage.test')

@section('title','مشروع أحكام ')

@section('content')

<style>
      p{
        padding-bottom: 2px;
    }
    .audio-player {
        width: 100%;
        margin-bottom: 20px;
        background: #161D27;
        border: 2px solid #C18F59;
        border-radius: 10px;
        padding: 10px;
    }
    .audio-player audio {
        width: 100%;
    }
    /* Custom audio player styling */
    .audio-player audio::-webkit-media-controls-panel {
        background: #161D27;
    }
    .audio-player audio::-webkit-media-controls-current-time-display,
    .audio-player audio::-webkit-media-controls-time-remaining-display {
        color: #C18F59;
    }
    .audio-player audio::-webkit-media-controls-play-button,
    .audio-player audio::-webkit-media-controls-mute-button {
        background-color: #C18F59;
        border-radius: 50%;
    }
    .audio-player audio::-webkit-media-controls-volume-slider,
    .audio-player audio::-webkit-media-controls-timeline {
        background-color: #C18F59;
        border-radius: 25px;
        margin-left: 10px;
        margin-right: 10px;
    }
    /* Firefox */
    .audio-player audio::-moz-range-thumb {
        background: #C18F59;
    }
    .audio-player audio::-moz-range-track {
        background: #C18F59;
    }
</style>
@yield('content')
<div class="main bg-[#161D27] w-full h-auto relative ">
    @include('homePage.menu')
    <!--last updated white header-->
<header class="HeaderHome  top-0 left-0 right-0 p-4">
    <div class="container-fluid mx-14">
      <div class="flex justify-between items-center">
        <a href="/"><div class="Logo">
          <img class="w-32 lg:w-40 xl:w-48" src="{{ asset('images/48.png') }}" alt="Logo" />
        </div></a>
        
        <div class="flex items-center space-x-4">
          <div class="relative">
          </div>
         <div class="relative">
          <img class="w- h-auto lg:w-5  cursor-pointer" src="{{ asset('images/favw.png') }}" alt="fav" onclick="redirectToFavorite()">
          <div class="absolute -top-2 -right-2 w-5 h-5 bg-red-600 rounded-full flex items-center justify-center">
              <span class="text-white text-xs">3</span>
            </div>
          </div> 
          
          <div class="h-8 border-r border-white"></div>
          <img class="w-6 h-6 lg:w-8 lg:h-8 cursor-pointer" src="{{ asset('images/magniw.png') }}" alt="search">
          <div class="h-8 border-r border-white"></div>
          <img id="menuIcon" class="w-6 h-6 lg:w-8 lg:h-8 cursor-pointer" src="{{ asset('images/menuw.png') }}" alt="menu">
        </div>
      </div>
      <div class="border-t border-white mt-4"></div>
    </header>
    <!--last updated white header end-->
    <div class="w-full h-[15rem] my-10 inline-flex justify-end items-center gap-10 px-10 bg-cover "  style="background-image: url('{{ asset('images/a7kamfullbg.jpeg') }}');  background-attachment: fixed;
  background-position: center; " >
        <div class="w-[65%]">
          <h1 class=" text-default-white font-bold mb-4" style="font-family:'El messiri'; font-size:2rem;">{{ $decision->title }}</h1>
        </div>
        <div class="relative ">
        <div class="relative text-5xl font-bold my-5 text-white w-[7rem] h-[7rem]" style="font-family:'El Messiri';">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/numberbg.png') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-70"></div>
    <h2 class="relative z-10 flex flex-col items-center justify-center w-full h-full text-center  p-1"  style="direction:rtl">
        @php
            $length = strlen($decision->topic_no);
            $fontSize = $length > 3 ? ($length > 4 ? '2rem' : '2.5rem') : '4rem';
        @endphp
        <span style="font-size: {{ $fontSize }}; font-family:'sakkal majalla'; line-height: 1;">{{ $decision->topic_no }}</span>
        <div class="text-[2rem]">{{ $decision->topic_letter }}</div>
    </h2>
</div>
        </div>
       
    </div>
    {{-- <img class="absolute w-full h-full z-[0]" src="{{asset('images/123.png')}}" alt="background"> --}}
<div class="container w-[70vw] mx-auto  py-[6rem] ">
    
    <div class="container mx-auto text-default-white pb-10">
    <h1 class="text-6xl text-default-white font-bold mb-4"><span>{{ $decision->topic_no }} </span><span >{{ $decision->topic_letter }}: </span> {{ $decision->title }} </h1>
    <div class="justify-start items-center gap-[5px] inline-flex w-[100%]" style="font-family:'El messiri'; ">
            <div class="Frame w-5 h-5 mx-2  ">
                <img src="{{ asset('images/goldAvatar.png')}}" alt="author avatar"></div>
            <div class="text-white text-[1rem] font-normal leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
            <div class="w-[40%]  text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'; color:#C18F59;">{{ $decision->author }} </div>
    </div>
   
    

  
    <h2 class="text-3xl font-bold my-5 border-b-2 border-[#C18F59] py-5" style=" !important; font-family:'El Messiri'; text-align: center;">{!! $decision->mogaz !!}</h2>
<!--audio player-->

    @if($decision->audio_files)
        <div class="audio-player">
            <audio controls>
                <source src="{{ asset('storage/' . $decision->audio_files) }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    @endif

<!--audio player end-->
    <h2 id="ka3da" class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->ka3da_title }}</h2>

    <div class="prose lg:prose-xl pb-8 border-b-2 border-[#fdba74]">
        {!! $decision->ka3da_text !!}
    </div>
    <div class="my-5 border-b-2 border-[#A6743E] pb-8">{!! $decision->dibaga !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->wak3a_title }}</h2>
    <div class="my-5 border-b-2 border-[#A6743E] pb-8">{!! $decision->wak3a_text !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->egraa_title }}</h2>
    <div class="my-5 border-b-2 border-[#A6743E] pb-8">{!! $decision->egraa_text !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->reason_title }}</h2>
    <div class="my-5 border-b-2 border-[#A6743E] pb-8">{!! $decision->reason_text !!}</div>
    <h2 class="text-3xl font-bold my-6 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->{'7okm_title'} }}</h2>
    <div class="my-5 border-b-2 border-[#A6743E] pb-8">{!! $decision->{'7okm_text'} !!}</div>
   
</div>
<!--add comment section-->
<div id="commentSection" class="my-8 border-t-2 border-[#A6743E] pt-8 z-[200]">
    <div class="flex justify-end ">
        <h2 class="text-3xl font-bold mb-4 inline-flex gap-4 justify-center text-right" style="color:#C18F59 !important; font-family:'El Messiri'; text-align: right;">أضف تعليقاً<span><img src="{{asset('images/mcomment.png')}}" alt="comment icon"></span></h2>
    </div>
        <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="contents_id" value="{{ $decision->id }}">
        <input type="hidden" name="table_name" value="{{ 'مشروع احكام' }}">
        
        <div>
            <label for="comment" class="block text-white my-3 text-right"></label>
            <textarea id="comment" name="comment" rows="4" placeholder="التعليق" required class="w-full px-3 py-2 text-gray-700 border  focus:outline-none" style="direction: rtl;"></textarea>
        </div>
        <div class="flex justify-between mt-3">
            <div class="w-[48%]">
                <label for="author" class="block text-white my-3 text-right"></label>
                <input type="text" id="author" name="author" placeholder=" الاسم  (اختياري) " required value="{{ old('author') }}" class="w-full px-3 py-5 text-gray-700 border  focus:outline-none h-[3.5rem]" style="direction: rtl;">
            </div>
            <div class="w-[48%]">
                <label for="email" class="block text-white my-3 text-right"></label>
                <input type="email" id="email"  name="email" placeholder="البريد الإلكتروني" required value="{{ old('email', Cookie::get('guest_email')) }}" class="w-full px-3 py-2 text-gray-700 border focus:outline-none h-[3.5rem]"  style="direction: rtl;">
            </div>
        </div>
        <div class="flex justify-end items-center my-3 form-check gap-4">
            <label for="save_guest_data" class="text-white text-right" style="direction: rtl;">احفظ بياناتى على هذا المتصفح لتعليقات قادمة</label>
            <input
                type="checkbox"
                id="save_guest_data"
                name="save_guest_data"
                class="mr-2 form-check-input"
            >
            
        </div>
        <div class=" my-5 flex justify-end">
            <button type="submit" class="bg-[#A6743E] text-white font-bold py-2 px-4 rounded inline-flex items-center gap-8">
                 <span><img src="{{asset('images/arrowlw.png')}}" alt="add comment"></span>تعليق
            </button>
        </div>
    </form>

</div>

<!-- Popup container -->
<div id="thank-you-popup" 
     style="
         display: none;
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         z-index: 1000;
         
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
         text-align: center;
     ">
    <img src="{{ asset('images/commentThankyou.png') }}" alt="Thank you" style="width: 100%; max-width: 700px;">
</div>
<!--end popup-->

</div>    

    <!-- action buttons-->
    <div class="action-buttons absolute lg:top-[28rem] 2xl:top-[28.5rem] top-[18rem] 2xl:right-[8rem]  lg:right-[4rem] right-[2rem]">
    <div class="w-[5rem] h-auto border-2 border-white text-white text-center ">
        <div class="border-b-2 border-white h-[5rem] flex items-center justify-center">
            <div class=" w-[100%] h-24 flex flex-col justify-center items-center">
                <div class="flex text-[1.5rem] text-[#C18F59]">
                    <div class="month font-bold text-3xl">{{ $decision->month }}</div>
                    <div>-</div>
                    <div class="day font-bold text-3xl">{{ $decision->day }}</div>
                </div>
                <div class="year text-[1rem]">{{ $decision->year }}</div>
            </div>
        </div>
        <div class="border-b-2 border-white h-[5rem] flex items-center justify-center"><div class="year  w-[100%] h-24 flex justify-center items-center">
            <img src="{{ asset('images/Vector1.png') }}" alt="add to favorite">
        </div></div>
        <div class="border-b-2 border-white h-[5rem] flex items-center justify-center"> <div class="Frame34 flex justify-center  gap-[3px] ">
            <img src="{{ asset('images/shareicon.png') }}" alt="add to favorite">
        </div></div>
        <div class="border-b-2 border-white h-[5rem] flex items-center justify-center">
            <a href="#commentSection"><div class="Frame34 flex justify-center  gap-[3px] ">
                 <img src="{{ asset('images/commenticon.png') }}" alt="add to favorite">
            </div></a>
        </div>
        <div class="h-[5rem] flex items-center justify-center"><div class="Frame34 flex justify-center  gap-[3px] ">
            <img src="{{ asset('images/pdficon.png') }}" alt="add to favorite">
        </div></div>
    </div>
   
</div>
<!-- action buttons-->
    </div>
@include('homePage.footer')

    <style>

.text-default-white {
    color: white; /* Default text color */
    direction: rtl;
    font-size: 1.8rem;
    font-family:'sakkal majalla'
    
    
}

/* Optionally, include any other default styles you might need */
.text-default-white * {
    color: inherit; /* Ensure all child elements inherit the white color */
    text-align:justify;
}


</style>
@if (session('comment_submitted'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popup = document.getElementById('thank-you-popup');

        // Show the popup
        popup.style.display = 'block';

        // Hide the popup after 5 seconds
        setTimeout(() => {
            popup.style.display = 'none';
        }, 5000);
    });
</script>
@endif

