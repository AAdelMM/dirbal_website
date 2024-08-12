<div class="Home w-full min-h-screen relative">
  <img class="sectionBg w-full h-full object-cover absolute left-0 top-0" src="{{ asset('images/blogbg.png') }}" />
  
  <div class="container mx-auto px-4">
    <div class="Frame285 w-full lg:w-3/4 xl:w-2/3  absolute right-20 top-20 lg:top-28 xl:top-35" style="direction:rtl;">
      <h1 class="text-[#161D27] text-[2.25rem] lg:text-[3.75rem] xl:text-[5rem] 2xl:text-[6.5rem] font-normal mb-8 2xl:mb-12" style="font-family:'Noto Kufi Arabic';">مدونة</h1>
        <p class="text-[#161D27] text-[1.25rem] lg:text-[1.5rem] 2xl:text-[1.75rem] font-normal leading-relaxed lg:leading-loose" style="font-family:'El Messiri';">
          القانون الليبي هو المرجع في الأعمال، لكن قدراً غير يسير منها يتوافق مع قوانين دول عربية لاسيما المصري، المصدر التاريخي للقانون الليبي ولكثير من القوانين العربية. تيسيراً للزائر في معرفة مدى تعلق العمل باهتمامه، قدمت له بعرض موجز لأهم القواعد التي يتضمنها ولتلك التي بني عليها. كما أضفت تسجيلاً صوتياً لذلك لمن يؤثر الاستماع على القراءة.
        </p>
    </div>
  </div>

  <div class="SubSection w-full absolute bottom-0 lg:bottom-20 bg-gray-700/20 border-t-2 border-orange-400">
    <div class="container  mx-auto px-4 py-8 2xl:py-16">
      <div class="flex flex-col lg:flex-row justify-around items-center space-y-8 lg:space-y-0 lg:space-x-8 xl:space-x-16">
        <div class="flex flex-col items-center">
          <img class="w-16 h-16 lg:w-23 lg:h-23 2xl:w-28 2xl:h-28 mb-4" src="{{asset('images/ktab.png')}}" alt="معهد القضاء" />
          <h2 class="text-[#161D27] text-xl lg:text-2xl xl:text-3xl font-bold text-center" style="font-family:'Noto Kufi Arabic'">كتاب</h2>
        </div>
        
        <img src="{{asset('images/Vline.png')}}" alt="" class="hidden lg:block h-20 xl:h-24">
        
        <div class="flex flex-col items-center">
          <img class="w-16 h-16 lg:w-23 lg:h-23 2xl:w-28 2xl:h-28 mb-4" src="{{asset('images/mabahth.png')}}" alt="المحكمة" />
          <h2 class="text-[#161D27] text-xl lg:text-2xl xl:text-3xl font-bold text-center" style="font-family:'Noto Kufi Arabic'">مباحث</h2>
        </div>
        
        <img src="{{asset('images/Vline.png')}}" alt="" class="hidden lg:block h-20 xl:h-24">
        
        <div class="flex flex-col items-center">
          <img class="w-16 h-16 lg:w-23 lg:h-23 2xl:w-28 2xl:h-28 mb-4" src="{{asset('images/islamiat.png')}}" alt="النيابة العامة" />
          <h2 class="text-[#161D27] text-xl lg:text-2xl xl:text-3xl font-bold text-center" style="font-family:'Noto Kufi Arabic'">إسلاميات</h2>
        </div>
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
          <img id="menuIcon" class="w-6 h-6 lg:w-8 lg:h-8 cursor-pointer" src="{{ asset('images/menuw.png') }}" alt="menu">
        </div>
      </div>
      <div class="border-t border-white mt-4"></div>
    </header>
</div>