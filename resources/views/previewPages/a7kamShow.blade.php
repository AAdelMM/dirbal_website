@php
use Illuminate\Support\Facades\DB;

$parts = DB::table('mashro3_a7kam')
->select('*', DB::raw('COALESCE((SELECT COUNT(*) FROM likes WHERE likes.contents_id = mashro3_a7kam.id), 0) as likes_count'))
    ->get();

 // Fetch likes_count for the current topic based on section_id, branch_id, and item_id
 $likes_count = DB::table('likes')
        ->where('section_id', $decision->section_id)
        ->where('branch_id', $decision->branch_id)
        ->where('item_id', $decision->item_id)
        ->count();

$latestTitles = DB::table('mashro3_a7kam')
    ->select('title', 'created_at','day','month')
    ->orderBy('created_at', 'desc')
    ->limit(5)
    ->get();

   
$monthNames = [
    1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل', 
    5 => 'مايو', 6 => 'يونيو', 7 => 'يوليو', 8 => 'أغسطس', 
    9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
];



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
    html, body {
    height: 100%;
    overflow: visible !important; /* Ensure scrolling is not restricted */
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
    <div class="w-full h-[18rem] my-10 inline-flex justify-end items-center gap-10 px-10 bg-cover "  style="background-image: url('{{ asset('images/a7kamfullbg.jpeg') }}');  background-attachment: fixed;
   background-repeat: no-repeat; background-position: center center; " >
        <div class="w-[65%]">
          <h1 class=" text-slate-300 font-bold mb-4 text-[3.5rem]" style="font-family:'zain'; direction:rtl;">{{ $decision->title }}</h1>
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
    <img class="absolute w-full h-full z-[0] auto mt-[-3rem]" src="{{asset('images/123.png')}}" alt="background">

<div id="article-content" class="container w-[60vw] ml-[25vw]  py-[2rem] relative">
    <div class="container mx-auto text-default-white pb-10">
    <h1 class="text-4xl text-slate-200 font-bold mb-4 leading-relaxed underline underline-offset-8" style="font-family: 'zain'; "><span class="text-[#FAE1C6]">{{ $decision->topic_no }} </span><span class="text-[#FAE1C6]">{{ $decision->topic_letter }}: </span > {{ $decision->title }} </h1>
    <div class="justify-start items-center gap-[5px] mt-5 inline-flex w-[100%]" style="font-family:'El messiri'; ">
            <div class="Frame w-5 h-5 mx-2  ">
                <img src="{{ asset('images/goldAvatar.png')}}" alt="author avatar"></div>
            <div class="text-white text-[1rem] font-normal leading-[18px]" style="font-family:'Noto Kufi Arabic';direction:rtl;">بقلم:</div>
            <div class="w-[40%]  text-[1rem] font-normal text-right leading-[18px]" style="font-family:'Noto Kufi Arabic'; color:#C18F59;">{{ $decision->author }} </div>
            
            
            <div class=" 2xl:text-[1rem] lg:text-[0.9rem] inline-flex items-center gap-2" style="font-family:'Noto Kufi Arabic';"><span class="date-icon w-5 h-5"><img src="{{ asset('images/date.png')}}" alt="date-icon"></span>بتاريخ: <span class="text-[#C18F59]">{{ $decision->day}} / </span><span class="text-[#C18F59]">{{$decision->month}} / </span><span class="text-[#C18F59]"> {{ $decision->year}}</span></div>
    </div>
   
    

  
    <h2 class="text-3xl font-bold my-5 border-b border-[#A6743E] py-5" style=" !important; font-family:'El Messiri'; text-align: center;">{!! $decision->mogaz !!}</h2>
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

    <div class="prose lg:prose-xl pb-8 border-b border-[#A6743E]">
        {!! $decision->ka3da_text !!}
    </div>
    <div class="my-5 border-b border-[#A6743E] pb-8">{!! $decision->dibaga !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->wak3a_title }}</h2>
    <div class="my-5 border-b border-[#A6743E] pb-8">{!! $decision->wak3a_text !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->egraa_title }}</h2>
    <div class="my-5 border-b border-[#A6743E] pb-8">{!! $decision->egraa_text !!}</div>
    <h2 class="text-3xl font-bold my-5 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->reason_title }}</h2>
    <div class="my-5 border-b border-[#A6743E] pb-8">{!! $decision->reason_text !!}</div>
    <h2 class="text-3xl font-bold my-6 " style="color:#fdba74 !important; font-family:'El Messiri'; text-align: center;">{{ $decision->{'7okm_title'} }}</h2>
    <div class="my-5 border-b border-[#A6743E] pb-8">{!! $decision->{'7okm_text'} !!}</div>
   
</div>
<!--add comment section-->
<div id="commentSection" class="my-8 border-t-2 border-[#A6743E] pt-8 z-[200]">
    <div class="flex justify-end ">
        <h2 class="text-2xl font-bold mb-4 inline-flex gap-4 justify-center text-right" style="color:#C18F59 !important; font-family:'El Messiri'; text-align: right;">أضف تعليقاً<span><img src="{{asset('images/mcomment.png')}}" alt="comment icon"></span></h2>
    </div>
        <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="contents_id" value="{{ $decision->id }}">
        <input type="hidden" name="table_name" value="{{ 'مشروع احكام' }}">
        
        <div>
            <label for="comment" class="block text-white my-3 text-right"></label>
            <textarea id="comment" name="comment" rows="6" placeholder="التعليق" required class="w-full px-3 py-2 text-gray-700 border  focus:outline-none" style="direction: rtl;"></textarea>
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
    <div  class="action-buttons lg:top-[28rem] 2xl:top-[28.5rem] top-[18rem] 2xl:right-[6.2rem] lg:right-[4rem] right-[2rem] absolute">
        <div class="w-[5.7rem] h-auto border-[1px] border-white text-white text-center ">
            <div class="border-b-2 border-white h-[5rem] flex items-center justify-center">
                <div class="like w-[100%] h-24 flex justify-center items-center cursor-pointer" style="max-width: 3rem;" 
                onclick="likeArticle({{ $decision->id }}, {{ $decision->section_id }}, {{ $decision->branch_id }}, {{ $decision->item_id }})">
                    <img id="like-icon-{{ $decision->id }}" src="{{ asset('images/like.png') }}" alt="like-icon" style="transition: all 0.3s ease;">
                    <span id="like-count-{{ $decision->id }}" class="text-white ml-2">{{ $likes_count}}</span>
                </div>
            </div>
            <div class="border-b-2 border-white h-[5rem] flex items-center justify-center">
                <div class="year w-[100%] h-24 flex justify-center items-center">
                    <img src="{{ asset('images/Vector1.png') }}" alt="add to favorite">
                </div>
            </div>
            <div class="share cursor-pointer  border-b-2 border-white h-[5rem]  flex items-center justify-center relative">
                <div class="Frame34 flex justify-center gap-[3px] w-[0.5rem]">
                    <img id="share-icon"   src="{{ asset('images/shareicon.png') }}" alt="add to favorite"
                         style=" transition: all 0.3s ease; max-width:6rem;"
                         onmouseover="this.src='{{ asset('images/share_gold.png') }}';"
                         onmouseout="this.src='{{ asset('images/shareicon.png') }}';">
                </div>
                <div id="sub-icons-container" class="absolute right-2 top-0">
                <div id="sub-icon1" class="sub-icon hidden border h-[5rem] w-[5rem] right-[5rem] absolute flex justify-center bg-[#161D27]">
                    <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank">
                        <img class="p-[1.2rem]" src="{{ asset('images/whatsapp.svg') }}" alt="add to favorite"
                        style=" transition: all 0.3s ease;"
                         onmouseover="this.src='{{ asset('images/whatsapp_gold.png') }}';"
                         onmouseout="this.src='{{ asset('images/whatsapp.png') }}';">
                </div>
                <div id="sub-icon2" class="sub-icon hidden border h-[5rem] w-[5rem] right-[10rem] absolute flex justify-center bg-[#161D27]">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">

                    <img class="p-[1.3rem] m-auto" src="{{ asset('images/facebook.svg') }}" alt="add to favorite" 
                    style=" transition: all 0.3s ease;"
                         onmouseover="this.src='{{ asset('images/facebook_gold.png') }}';"
                         onmouseout="this.src='{{ asset('images/facebook.svg') }}';">
                </div>
                <div id="sub-icon3" class="sub-icon hidden border h-[5rem] w-[5rem] right-[15rem] absolute flex justify-center items-center bg-[#161D27]">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode('Check out this article!') }}" target="_blank">

                    <img class="p-[1.2rem] " src="{{ asset('images/x.png') }}" alt="add to favorite"
                    style=" transition: all 0.3s ease; max-width:6rem;"
                         onmouseover="this.src='{{ asset('images/x_gold.png') }}';"
                         onmouseout="this.src='{{ asset('images/x.png') }}';">
                </div>
                <div id="sub-icon4" class="sub-icon hidden border h-[5rem] w-[5rem] right-[20rem] absolute flex justify-center items-center bg-[#161D27]">
                    <a href="mailto:?subject={{ urlencode('شاهد هذه المقالة!') }}&body={{ urlencode('لقد وجدت هذه المقالة الرائعة اتمنى ان تنال اعجابكم: ' . url()->current()) }}" target="_blank">

                    <img class="p-[1rem] " src="{{ asset('images/e.png') }}" alt="add to favorite"
                    style=" transition: all 0.3s ease; max-width:7rem;"
                         onmouseover="this.src='{{ asset('images/e_gold.png') }}';"
                         onmouseout="this.src='{{ asset('images/e.png') }}';">
                </div>
            </div>
            </div>
            
            <div class="border-b-2 border-white h-[5rem] flex items-center justify-center">
                <a href="#commentSection">
                    <div class="Frame34 flex justify-center gap-[3px] ">
                        <img src="{{ asset('images/commenticon.png') }}" alt="comment" style=" transition: all 0.3s ease; max-width:6rem;"
                        onmouseover="this.src='{{ asset('images/comment-gold.png') }}';"
                        onmouseout="this.src='{{ asset('images/comment.png') }}';">
                    </div>
                </a>
            </div>
            <div id="download_pdf" class="h-[5rem] flex items-center justify-center">
                <div class="Frame34 flex justify-center gap-[3px] ">
                @if (!empty($decision->pdf_files))<!-- Ensure $record->pdf_file contains the PDF path -->
                <a href="{{ asset('storage/pdf_files/' . basename($decision->pdf_files)) }}" 
                    download="{{ $decision->title ?? 'file' }}.pdf" class="btn btn-primary">
                    
                    <img src="{{ asset('images/pdf.png') }}" alt="download">
                </a>
                @else
                <img src="{{ asset('images/pdficon.png') }}" alt="download"> 
                @endif
                    
                </div>
            </div>
        </div>
    </div>
<!-- action buttons-->
    </div>
    <!-- last topics and search start-->
    <div class="last-topics top-[40rem] w-[16vw] 2xl:left-[4.8rem] lg:left-[3.5rem] absolute flex flex-col ">
        <div class="search-in-topics w-[100%]">
            <div class="inline-flex justify-around gap-1 w-[100%] h-[100%]">
                <div class="w-[28%]">
                    <button
                        type="button"
                        id="search-button"
                        class="px-4 py-1 bg-[#C18F59] text-white rounded-sm hover:bg-brown-600 w-[100%]">
                        بحث
                    </button>
                </div>
                
                    <input
                    type="text"
                    id="search-input"
                    placeholder="ابحث في هذا المقال"
                    class="form-control w-[69%] px-4 py-1 rounded-sm border border-gray-300 focus:ring focus:ring-blue-500 focus:ring-opacity-50 focus:outline-none text-right"/>
                
              </div>
              
        </div>
        <div class="last-topics mt-[6rem]">
            <div class="text-white text-right text-2xl font-bold"style="font-family:'El messiri';">آخر موضوعات الفرع</div>
            <div class="topics-list bg-white mt-5">
                
                @foreach ($latestTitles as $title)
                    <div class="topic w-[100%] border h-[auto] flex items-center justify-between"> 
                        <!-- Image with Overlay -->
                        <div class="relative w-[30%] h-[100%] p-2">
                            <img class="w-[auto] h-[100%] border-blue-200" src="{{ asset('images/numberbg.png') }}" alt="صورة الموضوع1">
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 w-[85%] h-[85%] m-auto bg-black bg-opacity-50 flex flex-col items-center justify-center  text-white">
                                @php
                                    $monthName = $monthNames[$title->month] ?? 'شهر غير معروف';
                                @endphp
                                <h1 class="text-white 2xl:text-xl text-md font-bold text-center">{{$title->day}}</h1>
                                <h2>{{ $monthName }}</h2>
                            </div>
                        </div>
                    
                        <!-- Text Content -->
                        <h1 class="w-[70%] h-[100%] text-right py-1 px-1 text-[0.75rem] 2xl:text-[1rem] border-l-2" style="font-family:'Noto Kufi Arabic';"> 
                            {{ $title->title }} 
                        </h1>
                    </div>
                
                
                @endforeach
            </div>
        </div>
        
    </div>
    <!-- last topics and search start-->

    <button id="scrollToTopBtn" class=" scrollToTopBtn hidden fixed right-8 p-2 bottom-5 z-[1000]  ">
       <img class="w-[70%] h-[70%]" src="{{asset('images/arrowUp.png')}}" alt="arrow up">
    </button>
@include('homePage.footer')

    <style>

.text-default-white {
    color: white; /* Default text color */
    direction: rtl;
    font-size: 1.8rem;
    font-family:'sakkal majalla'
    
    /*right buttons*/
    .action-buttons {
    transition: all 5.3s ease-in-out !important; /* Smooth transition */
}
*{
    transition: all 3s ease-in-out !important;
}

#scrollToTopBtn {
             /* Hidden by default */
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #C18F59;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

}


.sub-icon {
    opacity: 0;
    transform: scale(0.9); /* Shrink slightly */
    pointer-events: none; /* Prevent interaction when hidden */
    transition: opacity 2.3s ease-in-out, transform 2.3s ease-in-out;
}

/* Fade-In State */
.sub-icon.fade-in {
    opacity: 1;
    transform: scale(1);
    pointer-events: auto; /* Enable interaction when visible */
}

.highlight {
    background-color: yellow;
    color: #161D27
    
}
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const actionButtons = document.querySelector('.action-buttons');
        const sticky = actionButtons.offsetTop; // Get the initial position of the buttons
        console.log('before');
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        console.log('after');


        window.addEventListener('scroll', function() {
            console.log('Scrolling...'); // Log message to check if scrolling is detected

            if (window.pageYOffset > sticky) {
                actionButtons.classList.add('fixed','top-0');
                actionButtons.classList.remove('absolute', 'lg:top-[28rem]', '2xl:top-[28.5rem]', 'top-[18rem]');
                scrollToTopBtn.classList.add('block');
                scrollToTopBtn.classList.remove('hidden');
                
            } else {
                actionButtons.classList.remove('fixed','top-0');
                actionButtons.classList.add('absolute', 'lg:top-[28rem]', '2xl:top-[28.5rem]', 'top-[18rem]');
                scrollToTopBtn.classList.remove('block');
                scrollToTopBtn.classList.add('hidden');
            }
        });

         // Scroll to top when the button is clicked
         scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Smooth scroll effect
            });
            console.log('clicked')
        });
    });

    // Share icon
    document.addEventListener('DOMContentLoaded', () => {
    const shareIcon = document.getElementById('share-icon');
    const submenuContainer = document.getElementById('sub-icons-container'); // The submenu wrapper
    const subIcons = document.querySelectorAll('.sub-icon');

    // Helper function to show submenu
    const showSubmenu = () => {
        subIcons.forEach((icon, index) => {
            setTimeout(() => {
                icon.classList.remove('hidden');
                icon.classList.add('fade-in');
            }, index * 50); // Staggered animation
        });
    };

    // Helper function to hide submenu
    const hideSubmenu = () => {
        subIcons.forEach((icon, index) => {
            setTimeout(() => {
                icon.classList.remove('fade-in');
                icon.classList.add('hidden');
            }, index * 50); // Reverse staggered animation
        });
    };

    // Show submenu when mouse enters the share icon
    shareIcon.addEventListener('mouseenter', showSubmenu);

    // Keep submenu visible when hovering over the submenu container
    submenuContainer.addEventListener('mouseenter', showSubmenu);

    // Hide submenu when mouse leaves both the share icon and submenu container
   

    submenuContainer.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!shareIcon.matches(':hover')) {
                hideSubmenu();
            }
        }, 50);
    });
});




//search 
document.getElementById('search-button').addEventListener('click', function () {
    const input = document.getElementById('search-input');
    const article = document.getElementById('article-content');
    const searchText = input.value.trim();

    // Validate input: only Arabic words and at least two characters
    const arabicRegex = /^[\u0600-\u06FF\s]+$/;
    if (!arabicRegex.test(searchText) || searchText.length < 2) {
        alert('يرجى إدخال كلمة باللغة العربية تحتوي على حرفين على الأقل.');
        return;
    }

    // Clear previous highlights
    const originalText = article.innerHTML.replace(/<span class="highlight">(.*?)<\/span>/g, '$1');
    article.innerHTML = originalText;

    // Highlight matches
    const regex = new RegExp(`(${searchText})`, 'gi'); // Match Arabic text
    const highlighted = originalText.replace(regex, '<span class="highlight">$1</span>');
    article.innerHTML = highlighted;

    // Check if any match occurred
    if (originalText === article.innerHTML) {
        alert('الكلمة غير موجودة في النص.');
    }
});

/////////////like button 
function likeArticle(contentsId, sectionId, branchId, itemId) {
    // Change the icon to gold
    const likeIcon = document.getElementById(`like-icon-${contentsId}`);
    likeIcon.src = "{{ asset('images/like-gold.png') }}";

    // Send an AJAX request to save the like
    fetch('/like', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            contents_id: contentsId,
            section_id: sectionId,
            branch_id: branchId,
            item_id: itemId
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // Parse the response as JSON
    })
    .then(data => {
        if (data.success) {
            console.log('Like saved successfully');
            // Set a cookie to remember that the user has liked this topic
            document.cookie = `liked_${contentsId}=true; max-age=31536000; path=/`; // Cookie lasts for 1 year
            // Update the like count dynamically
            fetch(`/get-likes-count?section_id=${sectionId}&branch_id=${branchId}&item_id=${itemId}`)
                .then(response => response.json())
                .then(data => {
                    const likeCountElement = document.getElementById(`like-count-${contentsId}`);
                    likeCountElement.innerText = data.likes_count;
                });
        } else {
            console.error('Failed to save like:', data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


</script>

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

