@extends('homePage.test')

@section('title','شؤون فنية')

@section('content')

<div class="flex flex-col ml-[40vw] mt-[40vh]">
<h1 class="text-[3rem] text-yellow-600">شؤون فنية</h1>

<a href="{{ url('/') }}">
<button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
  رجوع
</button>
</a>

</div>