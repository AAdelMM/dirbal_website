<div class="container-fluid main-menu flex justify-end w-full  h-auto absolute z-[9000]">
  <div id="menuContainer" class="Menu hidden lg:w-[31.8vw] h-[120vh] w-[45vw]  fixed z-[5000]">
  <div class="Rectangle438 lg:w-[31.8vw] w-[45vw] lg:h-[130vh] h-[100vh] left-0 top-0 absolute bg-gray-800"></div>
  <div class="Frame9 w-[100%] right-5 2xl:top-[11.25rem] lg:top-[8rem] top-[4.6rem] absolute flex-col justify-start items-end gap-5 inline-flex">
    <div class="Principal flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px]  inline-flex">
        <div class=" w-[233px] text-right text-white text-6xl font-normal 2xl:text-[3rem] lg:text-[2rem] text-[1.5rem] " style="font-family:'Noto Kufi Arabic';">الرئيسية</div>
        <img class="pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/arrowleft2.png') }}" alt="arrow">
      </div>
    </div>
    <div class="Judge flex-col justify-start items-center gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] mt-[1.5rem] inline-flex">
        <div class=" w-[233px] cursor-pointer text-right text-white text-6xl font-normal 2xl:text-[3rem] lg:text-[2rem] text-[1.5rem]  z-[200]" style="font-family:'Noto Kufi Arabic';">القضاء</div>
        <img class="arrow plus-icon pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/mplus.png') }}" alt="plus">
      </div>
      <div class="submenu hidden flex-col w-[120%] text-[#E1C478] 2xl:text-[2.5rem] lg:text-[1.5rem] text-[1rem] 2xl:gap-[20px] gap-[10px] my-[5px] "  style="font-family:'Noto Kufi Arabic';direction:rtl;">
          <div class="submenu-item inline-flex items-center z-[200] "><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/court') }}"><span>المحاكم الدنيا</span></a></div>
          
         <!--  <div class="submenu-item inline-flex items-center z-[200]"> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/niaba') }}"><span>النيابة العامة</span></a></div> -->
          <div class="submenu-item inline-flex items-center z-[200] "> <span><img class="pl-[1rem]  " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/inst') }}"><span>معهد القضاء</span></a></div>
       </div>
    </div>
    <div class="Tribunal overflow-hidden flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] mt-[1.5rem]  inline-flex">
        <div class=" text-center cursor-pointer text-white text-6xl font-normal 2xl:text-[3rem] lg:text-[2rem] text-[1.5rem] z-[200]" style="font-family:'Noto Kufi Arabic';">المحكمة العليا</div>
        <img class=" arrow plus-icon pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/mplus.png') }}" alt="plus">
      </div>
      <div class="submenu hidden  flex-col text-[#E1C478] 2xl:text-[2.5rem] lg:text-[1.5rem] text-[1rem] 2xl:gap-[20px] gap-[10px] my-[5px] "  style="font-family:'Noto Kufi Arabic';direction:rtl;">
          <div class="submenu-item inline-flex items-center z-[200]"> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/a7kam') }}"><span>مشروعات الأحكام</span></a></div>
          
          <div class="submenu-item inline-flex items-center z-[200] w-[150%]"><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/montaqa') }}"><span> قضاء المحكمة العليا</span></a></div>
          <div class="submenu-item inline-flex items-center z-[200]"> <span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/shoon') }}"><span>شؤون فنية</span></a></div>
       </div>
    </div>
    <div class="Lecture flex-col justify-start items-end gap-[30px] flex">
      <div class="Head justify-start items-center gap-[30px] mt-[1.5rem] inline-flex">
        <div class=" text-center cursor-pointer text-white text-6xl font-normal 2xl:text-[3rem] lg:text-[2rem] text-[1.5rem] z-[500]" style="font-family:'Noto Kufi Arabic';">مدونة</div>
        <img class="arrow plus-icon pr-[1rem] lg:pr-[0rem]" src="{{ asset('images/mplus.png') }}" alt="plus">
      </div>
      <div class="submenu hidden flex-col  text-[#E1C478] 2xl:text-[2.5rem] lg:text-[1.5rem] text-[1rem] 2xl:gap-[20px] gap-[10px] my-[5px] "  style="font-family:'Noto Kufi Arabic';direction:rtl;">
          <div class="submenu-item inline-flex items-center z-[200]"style="::after" ><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/islamyat') }}"><span>إسلاميات</span></a></div>
          
          <div class="submenu-item inline-flex items-center z-[200]"><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/kitab') }}"><span>كتاب</span></a></div>
          <div class="submenu-item inline-flex items-center z-[200]"><span><img class="pl-[1rem] " src="{{asset('images/arroleft-gold.png')}}" alt=""></span><a href="{{ url('/mabahith') }}"><span>مباحث</span></a></div>
       </div>
    </div>
  </div>
  <div class="Group41 2xl:w-[6.4rem] 2xl:h-[9.6rem] lg:w-[5rem] lg:h-[7rem] lg:left-[2.2rem] w-[2.56rem] h-[3.8rem] left-[1.2rem] top-[2rem] absolute">
    <img class="CivDMp3Image684x10243 2xl:w-[6rem]  lg:w-[4rem] h-[auto] w-[2.56rem] left-0 top-0 absolute" src="{{ asset('images/menu-logo.png') }}" />
    
  </div>
  <div class=" w-[100%] h-[80%] flex items-end justify-center">
  <img class="menu-ayah 2xl:w-[34.4rem] lg:w-[24rem]  w-[13.8rem] h-[auto]  2xl:left-[2.4rem] left-[1rem] 2xl:top-[31.5rem] top-[20rem] opacity-50 " src="{{ asset('images/menu-ayah1.png') }}" />
  </div>
  <div id="menuCloseIcon" class="menu-Close cursor-pointer 2xl:w-[5.2rem] w-[2.08rem] 2xl:h-[5.2rem] h-[2.08rem] 2xl:left-[31.25rem] lg:left-[22rem] left-[18rem] 2xl:top-[1.25rem] top-[1.5rem] absolute rounded-[20px]">
    <div class="Line13 2xl:w-[2.8rem] w-[1.5rem] h-[0px] 2xl:left-[1.4rem] left-[0.4rem] 2xl:top-[3.7rem] top-[1.48rem] absolute origin-top-left -rotate-45 2xl:border-4 border-2 border-white"></div>
    <div class="Line14 2xl:w-[2.8rem] w-[1.5rem] h-[0px] 2xl:left-[1.7rem] left-[0.6rem] 2xl:top-[1.7rem] top-[0.48rem] absolute origin-top-left rotate-45 2xl:border-4 border-2 border-white"></div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
  $('.Head').click(function() {
    var $submenu = $(this).next('.submenu');
    var $icon = $(this).find('.plus-icon');

    $submenu.toggleClass('hidden'); // Toggle the submenu visibility
    $icon.toggleClass('rotate-icon'); // Toggle the rotation class for the icon

    if($submenu.hasClass('hidden')) {
      $icon.attr("src", "{{ asset('images/mplus.png') }}"); // Change to plus icon
    } else {
      $icon.attr("src", "{{ asset('images/minus.png') }}"); // Change to minus icon
    }
  });
});

$(document).ready(function() {
  // Function to close the menu
  function closeMenu() {
    $('#menuContainer').addClass('hidden'); // Add class to hide menu
  }

  // Close menu when clicking outside of it
  $(document).mouseup(function(e) {
    var $menuContainer = $('#menuContainer');
    if (!$menuContainer.is(e.target) && $menuContainer.has(e.target).length === 0) {
      closeMenu();
    }
  });

  // Close menu when clicking the X button
  $('#menuCloseIcon').click(function() {
    closeMenu();
  });

  // Open the menu (example, replace with your actual trigger)
  $('.Head').click(function() {
    $('#menuContainer').removeClass('hidden'); // Remove class to show menu
  });
});
//adjust height

$(document).ready(function() {
  // Function to close the menu
  function closeMenu() {
    $('#menuContainer').addClass('hidden'); // Add class to hide menu
    $('.Rectangle438').css('height', '100vh'); // Reset the background height to 100vh
  }

  // Function to open the menu
  function openMenu() {
    $('#menuContainer').removeClass('hidden'); // Remove class to show menu
    adjustBackgroundHeight(); // Adjust the background height
  }

  // Function to adjust the background height
  function adjustBackgroundHeight() {
    $('.Rectangle438').css('height', '148vh'); // Set the background height to 150vh
  }

  // Close menu when clicking outside of it
  $(document).mouseup(function(e) {
    var $menuContainer = $('#menuContainer');
    if (!$menuContainer.is(e.target) && $menuContainer.has(e.target).length === 0) {
      closeMenu();
    }
  });

  // Close menu when clicking the X button
  $('#menuCloseIcon').click(function() {
    closeMenu();
  });

  // Open the menu (example, replace with your actual trigger)
  $('.Head').click(function() {
    openMenu();
  });

  // Adjust background height when a submenu is toggled
  $('.Head').click(function() {
    adjustBackgroundHeight();
  });
});

</script>
<!--end-->