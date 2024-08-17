@php
use Illuminate\Support\Facades\DB;

$parts = DB::table('ma7kama_olia')
    ->select('year', 'month', 'ref_number', 'title', 'mogaz', 'ka3da_title', 'ka3da_text', 'dibaga', 'waka3_text', 'waka3_text', 'egraa_title', 'egraa_text', 'reason_title', 'reason_text', 'hokm_title', 'hokm_text')
    ->get();
@endphp

@extends('homePage.test')

@section('title','أحكام')

@section('content')


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
<div class="container mx-auto my-5 py-5">
    
    <div class="container mx-auto text-default-white">
    <h1 class="text-4xl text-default-white font-bold mb-4">{{ $decision->title }}</h1>
    <div> <span class="text-gray-600">الرقم المرجعي: {{ $decision->ref_number }}</div>
    <div class="mb-4">
        <span class="text-gray-600">تاريخ: {{ $decision->month }} {{ $decision->year }}</span>
    </div>

    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->ka3da_title }}</h2>

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
</div>    
    </div>


    <style>

.text-default-white {
    color: white; /* Default text color */
    direction: rtl;
    font-size: 1.5rem;
    font-family:'Noto Kufi Arabic'
}

/* Optionally, include any other default styles you might need */
.text-default-white * {
    color: inherit; /* Ensure all child elements inherit the white color */
}


</style>
 