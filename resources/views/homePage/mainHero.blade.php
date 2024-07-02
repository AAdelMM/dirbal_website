

<section>
<div class="container-fluid ">
  <!--Menu-->
@yield('content')
@include('homePage.menu')
<div class="Home w-screen lg:h-screen h-[auto] relative">
      <img class="HeroBg w-screen lg:h-screen h-[auto] left-0 top-0 bg-cover" src="{{ asset('images/homeHero.png') }}" />
      <img class="HeroQuran w-[44.17vw]  2xl:h-[25.5em] lg:h-[17.9em]  h-[auto]  2xl:top-[20em] lg:top-[15em] top-[8em] absolute " src="{{ asset('images/heroquran.png') }}" />
      <div class="w-[31vw] h-[5.5vh]  left-[3.7vw] top-[85vh] absolute">
        <div class="Ellipse4 w-[3.75em] h-[3.75em] left-0 top-0 absolute bg-cyan-600 rounded-full border-2 border-white"></div>
      </div>
      <div class="ContentCarrousol w-[99vw] 2xl:h-[816px] lg:h-[35.7em] h-[25em] 2xl:left-[2px] lg:left-[1.4px] left-[0.8px] 2xl:top-[118.98px] lg:top-[5.2em] top-[3em] absolute">
        <!--quotes start-->
        <div class="quotes 2xl:w-[894px] lg:w-[39.9rem] w-[22.35rem] 2xl:px-[52px] lg:px-[2.3em] px-[1.5em] 2xl:py-[60px] lg:py-[2.7em] py-[1.5em] 2xl:left-[919px] lg:left-[41em] left-[25em] 2xl:top-[120px] lg:top-[5.3em] top-[3em] absolute   rounded-xl shadow border border-gray-700/opacity-50 flex-col lg:justify-center lg:items-end 2xl:gap-8 lg:gap-4 gap-2 inline-flex"style="background-color: rgba(231, 241, 147, 0.2);">
          <div class="Frame280 2xl:w-[790px] lg:w-[35.3em] w-[25em] 2xl:h-[170px] lg:h-[7.4em] h-[5em] relative">
            <img class="Rectangle452 2xl:w-[309px] lg:w-[13.5em] w-[9em] 2xl:h-[170px] lg:h-[7.4em] h-[5em] left-0 top-0 absolute rounded-md" src="{{ asset('images/judge.jpg') }}" />
            <div id="quote-title" class=" 2xl:w-[49.4rem] lg:w-[35.25rem] w-[19.8rem] left-0 2xl:top-[104px] lg:top-[2em] top-[1rem] absolute text-right text-yellow-700 2xl:text-[55px] lg:text-[2.4em] text-[1.2rem] font-bold " style="font-family:'El Messiri';">قبسات</div>
          </div>
          <div class="Divider 2xl:w-[48.9rem] lg:w-[34.9rem] w-[19.6rem] h-px bg-gray-700/opacity-50"></div>
          <div id="quote-text" class=" 2xl:w-[48.9rem] lg:w-[34.9rem] w-[19.6rem] text-justify text-gray-900 2xl:text-[40px] lg:text-[20px] text-[15px] font-normal " style="font-family:'El Messiri';direction:rtl;">    إنه لمن سوء الحظ ألا ندرك ما يراد بنا، فيصرفوننا عما ينبغي أن نفكر فيه من مصير مجتمعنا أو أفكر فيه أنا من مصيري كإنسان، إلى أن نفكر في أشياء نحسبها راقية جداً .     </div>
          <div  class=" 2xl:w-[49.4rem] lg:w-[35.3rem] w-[19.8rem]  text-yellow-700 2xl:text-[25px] lg:text-[20px] text-[15px] font-bold "style="font-family:'Marhey'; ">المصدر : <span id="quote-source">مدير الموقع</span></div>
        </div>
        <!--quotes end-->
      </div>
<!--header black-->
      <div class="HeaderHome w-[54vw] 2xl:h-[7.8rem] lg:h-[5.5em] h-[4rem] 2xl:left-[60.57px] lg:left-[2.7em] left-[1.5rem] top-0 absolute">
    <div class="Line w-[89.3vw]  h-[0px] left-[8.72px] 2xl:top-[105px] lg:top-[4.6em] top-[3.2rem] absolute border border-gray-900"></div>
    <div class="Group20 w-[13.7vw] 2xl:h-[110px] lg:h-[4.8em] h-[3.2rem] 2xl:left-[45.2rem] lg:left-[31.7em] left-[18.08rem] 2xl:top-[14px] lg:top-[0.6em] top-[0.4rem] absolute">
      <img class=" w-[13.17vw]  2xl:h-[6.9rem] lg:h-[4.9rem] h-[2.75rem] left-0 top-0 absolute" src="{{ asset('images/bsm3.png') }}" />
      
    </div>
        
        <div class="Logo left-0 2xl:top-[14px] lg:top-[0.6em] top-[0.4rem] absolute justify-center items-center 2xl:gap-2.5 lg:gap-1.5 gap-1 inline-flex">
          <div class="Group47 2xl:w-[13.12rem] lg:w-[9.3rem] w-[5.3rem] 2xl:h-[76px] xl:h-[3.3em] relative">
<!---->
            <div class="Aaaaaa2 2xl:w-[206.88px] lg:w-[9em] w-[7rem] 2xl:h-[76px] lg:h-[3.3em] h-[2.6rem] left-0 top-0 absolute "><img class="Aaaaaa1 2xl:w-[206.88px] lg:w-[9em] w-[7rem] 2xl:h-[76px] lg:h-[3.3em] h-[2.6rem] left-0 lg:top-0 top-[-1.4rem] absolute" src="{{ asset('images/LOGO3.png') }}" /></div>
          </div>
          <div class="Line38 2xl:w-[70px] lg:w-[3.1em] w-[2.5rem] h-[0px] 2xl:mt-[80px] lg:mt-[3em] mt-[2.5rem] origin-top-left -rotate-90 border border-gray-700"></div>
          <img class="Aa1 2xl:w-[67px] lg:w-[2.9em] w-[2.2rem] 2xl:h-[85px] lg:h-[3.7em] h-[2.5rem] ml-[-3rem]" src="{{ asset('images/LOGO2.png') }}" />
        </div>
        <div class="Frame43 2xl:left-[79vw] lg:left-[77vw] left-[79vw]  2xl:top-[27px] lg:top-[1.2em] top-[0.6rem] absolute justify-center items-center 2xl:gap-[15px] xl:gap-[1em] inline-flex">
          <div class="Icons8Bookmark1 2xl:w-[38.64px] lg:w-[1.6em] w-[1.2rem] 2xl:h-[54.21px] lg:h-[2.3em] h-[1.8rem] flex items-center relative">
          <img class="favorite cursor-pointer" src="{{ asset('images/fav.png') }}" alt="fav" onclick="redirectToFavorite()">

            <div class="Ellipse3 2xl:w-[25px] lg:w-[1.1em] w-[0.8rem] 2xl:h-[25px] lg:h-[1.1em] h-[0.8rem] 2xl:left-[13.64px] lg:left-[0.6em] left-[0.4rem] 2xl:top-0 lg:top-[-0.4em] top-[-0.2rem] absolute bg-red-600 rounded-full"></div>
            <div class=" 2xl:w-2 lg:w-1 w-0.5 lg:h-[19px] h-[15px] 2xl:left-[20.5px] lg:left-[1em] left-[0.5rem] 2xl:top-[-3px] lg:top-[-0.6em] top-[-0.4rem] absolute  text-white 2xl:text-[1.25em] lg:text-[0.9em] text-[0.6rem] font-normal " style="font-family:'Arial';">3</div>  
          </div>
          
          <!-- <img class=" favorite cursor-pointer" src="{{ asset('images/fav.png') }}" alt="fav"> -->
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-gray-900"></div>
          <div class="Icons8Search11 2xl:w-10 lg:w-8 w-6 2xl:h-10 lg:h-8 h-6 relative"><img class="searchIcon cursor-pointer" src="{{ asset('images/search.svg') }}" alt="search"></div>
          
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-gray-900"></div>
          <div class="Icons8Menu11 2xl:w-10 lg:w-8 w-6 2xl:h-10 lg:h-8 h-6  relative"><img id="menuIcon" class="menuIcon cursor-pointer" src="{{ asset('images/menu.svg') }}" alt="menu"></div>
          
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 lg:h-10 h-8 border-r border-gray-900"></div>
          
        </div>
      </div>
     
</div>
</div>
</section>
<!--Search page-->

<div id="searchSection" class="Search w-full lg:h-[100vh] h-[50vh] overflow-hidden fixed top-0 left-0 bg-gray-900 hidden">
  <img class="searchbg w-full lg:h-[100vh] h-[50vh] absolute" src="{{ asset('images/searchbg.png')}}" />
  
  <!-- Input field for search with placeholder text -->
  <input type="text" id="searchInput" class="searchInput 2xl:w-[41.813rem] w-[20rem] 2xl:h-[9rem] h-[4.5rem] 2xl:left-[56rem] lg:left-[63vw] left-[50vw] 2xl:top-[20.5rem] lg:top-[40vh] top-[20vh] absolute text-right text-white opacity-80 2xl:text-[4rem] text-[2rem] font-normal font-['Noto Kufi Arabic'] placeholder-gray-500 bg-transparent focus:outline-none"
         placeholder="كلمة/كلمات البحث..." style="direction:rtl;" />
  
  <div class="Line34 2xl:w-[81.5rem] w-[72.4vw] h-[0px] 2xl:left-[16.8rem] left-[14.5vw] 2xl:top-[31.125rem] lg:top-[50vh] top-[24vh] absolute border-2 border-gray-200"></div>
  <div class="MagnifyingGlassSolid2 cursor-pointe 2xl:w-[3.125rem] w-[1.5rem] 2xl:h-[3.125rem] h-[1.5rem] 2xl:left-[17rem] left-[14.5vw] 2xl:top-[25.6rem] lg:top-[40vh] top-[21vh] absolute"><img src="{{ asset('images/magni.png')}}" alt="magnifier"></div>
  
  <div class="Close 2xl:w-[5.2rem] w-[2.5rem] 2xl:h-[5.2rem] h-[2.5rem] 2xl:left-[110.75rem] left-[90.6vw] 2xl:top-[3.75rem] top-[1.7rem] absolute rounded-[20px] cursor-pointer">
    <img class="cursor-pointer" src="{{ asset('images/close.png')}}" alt="close">
  </div>
</div>
<!--end of search page-->

<!-- JavaScript to rotate quotes -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let quotes = [];
    let currentQuoteIndex = 0;

    // Fetch quotes from the Laravel endpoint
    $.getJSON('/mainHero/quotes', function(data) {
        quotes = data;
        if (quotes.length > 0) {
            showNextQuote();
            setInterval(showNextQuote, 7000); // Change quote every 7 seconds
        }
    });

    function stripHtmlTags(html) {
        let doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || "";
    }

    function showNextQuote() {
        if (quotes.length == 0) return;

        // Update the quote elements with smooth transition
        updateTextWithTransition('#quote-title', stripHtmlTags(quotes[currentQuoteIndex].title));
        updateTextWithTransition('#quote-text', stripHtmlTags(quotes[currentQuoteIndex].body));
        
        // Optional: If you have a source field
        updateTextWithTransition('#quote-source', stripHtmlTags(quotes[currentQuoteIndex].source || "Unknown Source"));

        // Update the index for the next quote
        currentQuoteIndex = (currentQuoteIndex + 1) % quotes.length;
    }

    function updateTextWithTransition(selector, newText) {
        let $element = $(selector);

        // First fade out the element by setting opacity to 0
        $element.css('opacity', '0');

        // Use setTimeout to wait for the fade-out effect to complete before changing text
        setTimeout(function() {
            // Change the text
            $element.text(newText);

            // Set new height dynamically
            $element.css('max-height', 'none');
            let newHeight = $element[0].scrollHeight + 'px';

            // Reset max-height to zero for smooth expansion
            $element.css({
                'max-height': '0',
                'transition': 'none' // Temporarily disable transition to reset height
            });

            // Force reflow to apply the reset styles immediately
            $element[0].offsetHeight;

            // Apply new height and fade in
            $element.css({
                'max-height': newHeight,
                'opacity': '1',
                'transition': 'max-height 1.5s ease, opacity 1.5s ease' // Re-enable transition
            });
        }, 600); // Duration matches the CSS transition time
    }
});
</script>





