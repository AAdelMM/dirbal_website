<div class="Home w-full min-h-screen relative">
@yield('content')
@include('homePage.menu')
  <img class="sectionBg w-full h-full object-cover absolute left-0 top-0" src="{{ asset('images/judgbg.png') }}" />
  
  <div class="container mx-auto px-4">
    <div class="Frame285 w-full lg:w-3/4 xl:w-2/3  absolute right-20 top-20 lg:top-28 xl:top-35" style="direction:rtl;">
      <h1 class="text-white  text-[2.25rem] lg:text-[3.75rem] xl:text-[4rem] 2xl:text-[6rem] font-normal mb-8 2xl:mb-12" style="font-family:'Noto Kufi Arabic';">القضاء</h1>
        <p class="text-white 2xl:w-[100rem] lg:w-[75rem] mt-[-2rem] text-[1.25rem] lg:text-[1.5rem] 2xl:text-[1.75rem] font-normal leading-relaxed lg:leading-loose" style="font-family:'El Messiri';">
        فهذه مكتبة متواضعة التأمت أجزاؤها من بعض عملي بالمحاكم الدنيا وبالمعهد العالي للقضاء. رجَّحت فائدتها فهأنذا أنشرها.
القانون الليبي مرجع الأحكام، لكن قدراً غير يسير منها يتوافق مع قوانين دول عربية لاسيما المصرية، المصدر التاريخي لجلّ القوانين العربية.
وإذ أضعها بين يدي القارئ الكريم، احتسبها عند الله من الأعمال النافعة التي لا أرتجي من ورائها غير الأجر والثواب. ولْيعلم القارئُ الكريم أن الأحكام القضائية نتاج خبرة قصيرة، وثمرة اجتهاد متواضع يحتمل الصوابَ والخطأ. فإن كان صواباً، فمنَ الله تعالى وبتوفيقه، وإلا فبسبب غفلة أو تقصير. ولئن يمتنع عليَّ إصلاحُ قضاء قضيته أمسِ بَنيتُه على اجتهاد غير سديد، إلا أنه لن يمنع من رجوعي إلى الحقّ وإيثاره مستقبلاً إذا ما هُديت فيه لرشدي. فاللهَ أسألُ المغفرةَ والسداد.
        </p>
    </div>
  </div>

  <div class="SubSection w-full absolute bottom-0 lg:bottom-10 bg-gray-700/20 border-t-2 border-orange-400 " >
    <div class="container  mx-auto px-4 py-8 2xl:py-16">
      <div class="flex flex-col lg:flex-row justify-around items-center space-y-8 lg:space-y-0 lg:space-x-8 xl:space-x-16">
      <a href="{{ url('/inst') }}"><div class="flex flex-col items-center">
          <img class="w-16 h-16 lg:w-23 lg:h-23 2xl:w-28 2xl:h-28 mb-4" src="{{asset('images/jicon1.png')}}" alt="معهد القضاء" />
          <h2 class="text-gray-200 text-xl lg:text-2xl xl:text-3xl font-bold text-center" style="font-family:'Noto Kufi Arabic'">معهد القضاء</h2>
        </div></a>
        
        <!-- <img src="{{asset('images/Vline.png')}}" alt="" class="hidden lg:block h-20 xl:h-24"> -->
        
        <!-- <div class="flex flex-col items-center">
          <img class="w-16 h-16 lg:w-23 lg:h-23 2xl:w-28 2xl:h-28 mb-4" src="{{asset('images/jicon2.png')}}" alt="المحكمة" />
          <h2 class="text-gray-200 text-xl lg:text-2xl xl:text-3xl font-bold text-center" style="font-family:'Noto Kufi Arabic'">المحكمة</h2>
        </div> -->
        
        <img src="{{asset('images/Vline.png')}}" alt="" class="hidden lg:block h-20 xl:h-24">
        
        <a href="{{ url('/court') }}"><div class="flex flex-col items-center">
          <img class="w-16 h-16 lg:w-23 lg:h-23 2xl:w-28 2xl:h-28 mb-4" src="{{asset('images/jicon3.png')}}" alt="النيابة العامة" />
          <h2 class="text-gray-200 text-xl lg:text-2xl xl:text-3xl font-bold text-center" style="font-family:'Noto Kufi Arabic'">المحاكم الدنيا</h2>
        </div></a>
      </div>
    </div>
  </div>
  
  <header class="HeaderHome absolute top-0 left-0 right-0 p-4">
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
          <img id="menuIcon3" class="w-6 h-6 lg:w-8 lg:h-8 cursor-pointer" src="{{ asset('images/menuw.png') }}" alt="menu">
          <div class="h-8 border-r border-white"></div>
        </div>
      </div>
      <div class="border-t border-white mt-4"></div>
    </header>
</div>
<script>
  //toggle menu
document.addEventListener('DOMContentLoaded', function() {
  // Get references to menu icon and menu container
  const menuIcon = document.getElementById('menuIcon3');
  const menuContainer = document.getElementById('menuContainer');
  const menuCloseIcon = document.getElementById('menuCloseIcon'); // Assuming you add an ID to your close icon

  // Function to toggle menu visibility
  function toggleMenu() {
    menuContainer.classList.toggle('hidden'); // Toggle the 'hidden' class
  }

  // Event listener for menu icon on main page
  menuIcon.addEventListener('click', toggleMenu);

  // Event listener for close icon within menu itself
  menuCloseIcon.addEventListener('click', toggleMenu);
});
</script>