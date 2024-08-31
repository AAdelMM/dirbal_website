@php
use Illuminate\Support\Facades\DB;

$parts = DB::table('ma7kama_olia')
    ->select('year', 'month', 'ref_number', 'title', 'mogaz', 'ka3da_title', 'ka3da_text', 'dibaga', 'waka3_text',
     'waka3_text', 'egraa_title', 'egraa_text', 'reason_title', 'reason_text', 'hokm_title', 'hokm_text',
     'topic_number','author','subtitle','mp3_file','pdf_file','topic_number_alpha','topic_number_numeric')
    ->get();
@endphp

@extends('homePage.test')

@section('title','أحكام')

@section('content')

<style>
      p{
        padding-bottom: 15px;
    }
    .audio-player {
        width: 100%;
        margin-bottom: 20px;
        background: #161D27;
        border: 2px solid #fdba74;
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
        color: #fdba74;
    }
    .audio-player audio::-webkit-media-controls-play-button,
    .audio-player audio::-webkit-media-controls-mute-button {
        background-color: #fdba74;
        border-radius: 50%;
    }
    .audio-player audio::-webkit-media-controls-volume-slider,
    .audio-player audio::-webkit-media-controls-timeline {
        background-color: #fdba74;
        border-radius: 25px;
        margin-left: 10px;
        margin-right: 10px;
    }
    /* Firefox */
    .audio-player audio::-moz-range-thumb {
        background: #fdba74;
    }
    .audio-player audio::-moz-range-track {
        background: #fdba74;
    }
</style>

<div class="main bg-[#161D27] w-full h-auto relative ">
    <!--last updated white header-->
<header class="HeaderHome  top-0 left-0 right-0 p-4">
    <div class="container-fluid mx-14">
      <div class="flex justify-between items-center">
        <div class="Logo">
          <img class="w-32 lg:w-40 xl:w-48" src="{{ asset('images/48.png') }}" alt="Logo" />
        </div>
        
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
    <div class="w-full h-[10rem] my-10 inline-flex justify-end items-center gap-10 px-10 bg-cover"  style="background-image: url('{{ asset('images/civil_law.png') }}');" >
        <div>
          <h1 class="text-6xl text-default-white font-bold mb-4" style="font-family:'El messiri';">{{ $decision->title }}</h1>
        </div>
        <div class="relative ">
        <div class="relative text-5xl font-bold my-5 text-white w-[7rem] h-[7rem]" style="font-family:'El Messiri';">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/numberbg.png') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-70"></div>
    <h2 class="relative z-10 flex flex-col items-center justify-center w-full h-full text-center  p-1" style="direction:rtl;">
        @php
            $length = strlen($decision->topic_number);
            $fontSize = $length > 3 ? ($length > 4 ? '2rem' : '2.5rem') : '3rem';
        @endphp
        <span style="font-size: {{ $fontSize }}; font-family:'sakkal majalla'; line-height: 1;">{{ $decision->topic_number }}</span>
    </h2>
</div>
        </div>
       
    </div>
<div class="container w-[70vw] mx-auto  py-[6rem] ">
    
    <div class="container mx-auto text-default-white pb-10">
    <h1 class="text-4xl text-default-white font-bold mb-4">{{ $decision->title }}</h1>
    <div class="DivMkdPostInfo  justify-center items-end gap-[5px] inline-flex" style="font-family:'El messiri'; ">
            <div class="Frame w-5 h-5 mx-2 relative"><img src="{{ asset('images/goldAvatar.png')}}" alt=""></div>
            <div class="text-white text-[1rem] font-normal leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
            <div class="text-orange-400 w-[6rem] text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'">{{ $decision->author }} </div>
    </div>
   
    

  
    <h2 class="text-3xl font-bold my-5 border-b-2 border-[#fdba74] py-5" style=" !important; font-family:'El Messiri'; text-align: center;">{!! $decision->subtitle !!}</h2>
<!--audio player-->

    @if($decision->mp3_file)
        <div class="audio-player">
            <audio controls>
                <source src="{{ asset('storage/' . $decision->mp3_file) }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    @endif

<!--audio player end-->
    <h2 id="ka3da" class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->ka3da_title }}</h2>

    <div class="prose lg:prose-xl pb-8 border-b-2 border-[#fdba74]">
        {!! $decision->ka3da_text !!}
    </div>
    <div class="my-5 border-b-2 border-[#fdba74] pb-8">{!! $decision->dibaga !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->waka3_title }}</h2>
    <div class="my-5 border-b-2 border-[#fdba74] pb-8">{!! $decision->waka3_text !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->egraa_title }}</h2>
    <div class="my-5 border-b-2 border-[#fdba74] pb-8">{!! $decision->egraa_text !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->reason_title }}</h2>
    <div class="my-5 border-b-2 border-[#fdba74] pb-8">{!! $decision->reason_text !!}</div>
    <h2 class="text-3xl font-bold my-6 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->hokm_title }}</h2>
    <div class="my-5 border-b-2 border-[#fdba74] pb-8">{!! $decision->hokm_text !!}</div>
   
</div>
<div class="my-8 border-t-2 border-[#fdba74] pt-8">
    <h2 class="text-3xl font-bold mb-4" style="color:#fdba74 !important; font-family:'El Messiri'; text-align: right;">اضف تعليق</h2>
    
        <form action=""></form>
        @csrf
        <input type="hidden" name="decision_id" value="{{ $decision->id }}">
        <div>
            <label for="name" class="block text-white my-3 text-right">الاسم</label>
            <input type="text" id="name" name="name" required class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" style="direction: rtl;">
        </div>
        <div>
            <label for="email" class="block text-white my-3 text-right">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" style="direction: rtl;">
        </div>
        <div>
            <label for="comment" class="block text-white my-3 text-right">التعليق</label>
            <textarea id="comment" name="comment" rows="4" required class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" style="direction: rtl;"></textarea>
        </div>
        <div class="text-right my-5">
            <button type="submit" class="bg-[#fdba74] text-white font-bold py-2 px-4 rounded">
                اضف تعليق
            </button>
        </div>
    </form>

</div>

</div>    

    <!-- action buttons-->
    <div class="action-buttons absolute lg:top-[28rem] 2xl:top-[28.5rem] top-[18rem] 2xl:right-[8rem]  lg:right-[4rem] right-[2rem]">
    <div class="w-[5rem] h-auto border-2 border-white">
        <div class="border-b-2 border-white h-[5rem]">1</div>
        <div class="border-b-2 border-white h-[5rem]">2</div>
        <div class="border-b-2 border-white h-[5rem]">3</div>
        <div class="border-b-2 border-white h-[5rem]">4</div>
        <div class="h-[5rem]">5</div>
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
 