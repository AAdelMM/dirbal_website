<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=font:wght@400&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&family=Marhey:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body,html{
        padding:0;
        margin: 0;
        overflow-x:hidden;
      }
      section{
        max-width:100%;
        overflow:hidden;
      }
      @tailwind base;
      @tailwind components;
      @tailwind utilities;
      body {
        @apply leading-[normal] m-0;
        
        
      }

      *,
      ::before,
      ::after {
        border-width: 0;
      }
       /* Looping GIF Background */
       .LastTopics {
            background-image: url('{{ asset('images/section2bg.gif') }}'); /* Path to your GIF */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            max-width: 100%vw;
            height: 73vh; /* Full viewport height */
            position: relative;
            overflow: hidden; /* To ensure content doesn't overflow */
        }
        .LastTopics::before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(22, 29, 39, 0.5); /* Change the color and opacity as needed */
          }
        /* Animation for Subtitle */
        .subtitle-container {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 50px;
            color: white;
            font-family: 'El Messiri', sans-serif;
            text-align: center;
        }

        .subtitle {
            animation: fadeInOut 10s infinite;
        }

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0;
            }
            10%, 30% {
                opacity: 1;
            }
            40%, 90% {
                opacity: 0;
            }
        }

        .row1, .row2, .row3 {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
          }

        /* Fade-in animation class */
        .animate {
          opacity: 1;
          transform: translateY(0);
        }
    </style>
  </head>
  <body>
    <!--sectiom-1 Main Start--> 
<section>
<div class="container-fluid ">
<div class="Home w-screen h-screen relative">
      <img class="HeroBg w-screen h-screen left-0 top-0 bg-cover" src="{{ asset('images/homeHero.png') }}" />
      <img class="HeroQuran 2xl:w-[53em] xl:w-[37.1em] 2xl:h-[25.5em] xl:h-[17.9em] md:w-[20em] md:h-[8em]  2xl:top-[20em] xl:top-[15em] md:top-[8em] absolute shadow" src="{{ asset('images/heroquran.png') }}" />
      <div class="w-[31vw] h-[5.5vh]  left-[3.7vw] top-[85vh] absolute">
        <div class="Ellipse4 w-[3.75em] h-[3.75em] left-0 top-0 absolute bg-cyan-600 rounded-full border-2 border-white"></div>
      </div>
      <div class="ContentCarrousol w-[99vw] 2xl:h-[816px] xl:h-[35.7em] 2xl:left-[2px] xl:left-[1.4px] 2xl:top-[118.98px] xl:top-[5.2em] absolute">
        <!--quotes start-->
        <div class="quotes 2xl:w-[894px] xl:w-[39.1em] 2xl:px-[52px] xl:px-[2.3em] 2xl:py-[60px] xl:py-[2.7em] 2xl:left-[919px] xl:left-[41em] 2xl:top-[120px] xl:top-[5.3em] absolute bg-white/opacity-40 rounded-xl shadow border border-gray-700/opacity-50 flex-col justify-center items-end 2xl:gap-8 xl:gap-4 inline-flex">
          <div class="Frame280 2xl:w-[790px] xl:w-[35.3em] 2xl:h-[170px] xl:h-[7.4em] relative">
            <img class="Rectangle452 2xl:w-[309px] xl:w-[13.5em] 2xl:h-[170px] xl:h-[7.4em] left-0 top-0 absolute rounded-md" src="{{ asset('images/judge.jpg') }}" />
            <div class=" 2xl:w-[790px] xl:w-[15em] left-0 2xl:top-[104px] xl:top-[2em] absolute text-right text-yellow-700 2xl:text-[55px] xl:text-[2.4em] font-bold " style="font-family:'El Messiri';">قبسات</div>
          </div>
          <div class="Divider 2xl:w-[782px] xl:w-[34.2em] h-px bg-gray-700/opacity-50"></div>
          <div class=" 2xl:w-[782px] xl:w-[28em] text-justify text-gray-900 2xl:text-[40px] xl:text-[20px] font-normal " style="font-family:'El Messiri';direction:rtl;">    إنه لمن سوء الحظ ألا ندرك ما يراد بنا، فيصرفوننا عما ينبغي أن نفكر فيه من مصير مجتمعنا أو أفكر فيه أنا من مصيري كإنسان، إلى أن نفكر في أشياء نحسبها راقية جداً .     </div>
          <div class=" 2xl:w-[790px] xl:w-[28em]  text-yellow-700 2xl:text-[25px] xl:text-[20px] font-bold "style="font-family:'Marhey'; ">المصدر : كتاب القانون المدني</div>
        </div>
        <!--quotes end-->
      </div>
      <div class="HeaderHome 2xl:w-[1037.46px] xl:w-[45.39em] md:w-[20em] md:h-[2.5] 2xl:h-[125.13px] xl:h-[5.5em] 2xl:left-[60.57px] xl:left-[2.7em] top-0 absolute">
    <div class="Line 2xl:w-[1715px] xl:w-[79em] md:w-[20em] h-[0px] left-[8.72px] 2xl:top-[113px] xl:top-[4.9em] absolute border border-gray-900"></div>
    <div class="Group20 2xl:w-[253px] xl:w-[11.1em] 2xl:h-[110px] xl:h-[4.8em] 2xl:left-[723.36px] xl:left-[31.7em] 2xl:top-[14px] xl:top-[0.6em] absolute">
      <img class=" 2xl:w-[253px] xl:w-[11.1em] 2xl:h-[110px] xl:h-[4.8em] left-0 top-0 absolute" src="{{ asset('images/bsm.svg') }}" />
      <div class="Rectangle446 w-[270px] h-[127px] 2xl:left-[-11px] xl:left-[-0.5em] top-[-19px] absolute "></div>
    </div>
        
        <div class="Logo left-0 2xl:top-[14px] xl:top-[0.6em] absolute justify-center items-center 2xl:gap-2.5 xl:gap-1.5 inline-flex">
          <div class="Group47 2xl:w-[206.88px] xl:w-[9em] 2xl:h-[76px] xl:h-[3.3em] relative">
            <img class="Aaaaaa1 2xl:w-[206.88px] xl:w-[9em] 2xl:h-[76px] xl:h-[3.3em] left-0 top-0 absolute" src="{{ asset('images/LOGO.png') }}" />
            <div class="Aaaaaa2 2xl:w-[206.88px] xl:w-[9em] 2xl:h-[76px] xl:h-[3.3em] left-0 top-0 absolute "></div>
          </div>
          <div class="Line38 2xl:w-[70px] xl:w-[3.1em] h-[0px] 2xl:mt-[80px] xl:mt-[3em] origin-top-left -rotate-90 border border-gray-700"></div>
          <img class="Aa1 2xl:w-[67px] xl:w-[2.9em] 2xl:h-[85px] xl:h-[3.7em]" src="{{ asset('images/favicon.png') }}" />
        </div>
        <div class="Frame43 2xl:left-[147.7vh] xl:left-[64.9em] 2xl:top-[27px] xl:top-[1.2em] absolute justify-center items-center 2xl:gap-[15px] xl:gap-[1em] inline-flex">
          <div class="Icons8Bookmark1 2xl:w-[38.64px] xl:w-[1.6em] 2xl:h-[54.21px] xl:h-[2.3em] relative">
            <div class="Ellipse3 2xl:w-[25px] xl:w-[1.1em] 2xl:h-[25px] xl:h-[1.1em] 2xl:left-[13.64px] xl:left-[0.6em] 2xl:top-0 xl:top-[-0.4em] absolute bg-red-600 rounded-full"></div>
            <div class=" 2xl:w-2 xl:w-1 h-[19px] 2xl:left-[20.5px] xl:left-[1em] 2xl:top-[-3px] xl:top-[-0.6em] absolute  text-white 2xl:text-[1.25em] xl:text-[0.9em] font-normal " style="font-family:'Arial';">3</div>  
          </div>
          <img src="{{ asset('images/fav.png') }}" alt="fav">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 xl:h-10 border-r border-gray-900"></div>
          <div class="Icons8Search11 2xl:w-10 xl:w-8 2xl:h-10 xl:h-8 relative"></div>
          <img src="{{ asset('images/search.svg') }}" alt="search">
          <div class="SpanMkdVerticalSeparator w-px 2xl:h-12 xl:h-10 border-r border-gray-900"></div>
          <div class="Icons8Menu11 2xl:w-10 xl:w-8 2xl:h-10 xl:h-8  relative"></div>
          <img src="{{ asset('images/menu.svg') }}" alt="menu">
          <div class="SpanMkdVerticalSeparator w-px h-12 border-r border-gray-900"></div>
          
        </div>
      </div>
      <div class="SwitchRtf w-[1918px] h-[60.06px] left-[-0px] top-[440.45px] absolute">
        <div class="AngleLeft w-[60px] h-[60px] left-[60px] top-[60px] absolute origin-top-left -rotate-180 bg-zinc-300/opacity-50"></div>
        <div class="AngleRight w-[60px] h-[60px] left-[1860px] top-0 absolute bg-zinc-300/opacity-50"></div>
      </div>
</div>
</div>
</section>
   <!--sectiom-1 Main End-->

   <!--sectiom-2 Start-->
<section>
      <!--title-->
   <div id="section-2"  class="LastTopics flex justify-center relative bg-gray-800">
      <div class="subtitle-container flex justify-center w-[72vw] h-[6.4vh] mt-[1.4em] ">
         
          <div id="subtitle" class="   text-right text-white 2xl:text-[1em] xl:text-[0.7em] font-normal font-['El Messiri'] ">آخر الموضوعات </div>  
                  <img class="w-[2em] h-auto left-[15vw] absolute" src="{{ asset('images/IocndecorL.svg') }}" alt="icon">
                  <img class="w-[2em] h-auto right-[15vw] absolute " src="{{ asset('images/IocndecorR.svg') }}" alt="icon">   
          </div>
      <!--content-->
      <div class="content absolute">
      <div class="container flex justify-center w-[67.6vw] h-[70vh]  relative">
  <div class="Lastframecontent flex justify-center absolute left-0 top-[25vh] ">
      <!--topics-->
    <div class="Group94 w-[31.5vw] h-[34.8vh] left-[1.8vw] top-[0.25em] absolute">
          <div class="DivMkdItemTextHolder w-[31.5vw] h-[12.6vh] left-0 top-0 absolute bg-white border border-zinc-300">
                  <div class=" w-[26.5vw] left-[4.2vw] top-[0.8em] absolute text-justify text-gray-700 2xl:text-[1.6em] xl:text-[1.2em] font-normal font-['Amiri'] ">69 م د: فسخ عقد مبرم بين الغير (عدم قبول لعدم المصلحة)‎</div>
                  <div class="Frame275 w-[10vw] left-[23vw] top-[7.8vh] absolute justify-center items-center 2xl:gap-1.5 xl:gap-1 inline-flex">
                        <div class=" text-orange-400 2xl:text-xl xl:text-lg font-bold font-['Amiri'] ">القضاء المدني‎</div>
                        <div class="Frame w-[0.7vw] h-[1.3vh] relative"></div>
                  </div>
              
            <div class="Group93 w-[3.1vw] h-[7.2vh] left-[-1.9em] top-[1.1em] absolute">
                      <div class="SpanMkdPostInfoDateDay w-[3.1vw] h-[5.7vh] left-0 2xl:top-0 xl:top-[-0.5vh] absolute bg-gray-700">
                        <div class=" w-[1.5vw] h-[2.7vh] left-[0.8vw] top-0 absolute text-center text-white 2xl:text-[1.5em] xl:text-[1.1em] font-black font-['Roboto'] leading-[50px]">18</div>
                      </div>
                      <div class="SpanMkdPostInfoDateMonth w-[3.1vw] h-[3.8vh] left-0 top-[5vh] absolute bg-orange-400">
                        <div class=" left-[0.9vw] top-[-0.25em] absolute text-center text-white 2xl:text-[1.4em] xl:text-[1em] font-normal font-['Arial'] leading-loose">08</div>
                      </div>
            </div>
         </div>
         <!--topic2-->
         <div class="DivMkdItemTextHolder w-[31.5vw] h-[12.6vh] left-0 top-[13vh] absolute bg-white border border-zinc-300">
                  <div class=" w-[26.5vw] left-[4.2vw] top-[0.8em] absolute text-justify text-gray-700 2xl:text-[1.6em] xl:text-[1.2em] font-normal font-['Amiri'] ">69 م د: فسخ عقد مبرم بين الغير (عدم قبول لعدم المصلحة)‎</div>
                  <div class="Frame275 w-[10vw] left-[23vw] top-[7.8vh] absolute justify-center items-center 2xl:gap-1.5 xl:gap-1.2 inline-flex">
                        <div class=" text-orange-400 2xl:text-xl xl:text-lg font-bold font-['Amiri'] ">القضاء المدني‎</div>
                        <div class="Frame w-[0.7vw] h-[1.3] relative"></div>
                  </div>
              
            <div class="Group93 w-[3.1vw] h-[7.2vh] left-[-1.9em] top-[1.1em] absolute">
                      <div class="SpanMkdPostInfoDateDay w-[3.1vw] h-[5.7vh] left-0 2xl:top-0 xl:top-[-0.5vh] absolute bg-gray-700">
                        <div class=" w-[1.5vw] h-[2.7vh] left-[0.8vw] top-0 absolute text-center text-white 2xl:text-[1.5em] xl:text-[1.1em] font-black font-['Roboto'] leading-[50px]">18</div>
                      </div>
                      <div class="SpanMkdPostInfoDateMonth w-[3.1vw] h-[3.8vh] left-0 top-[5vh] absolute bg-orange-400">
                        <div class=" left-[0.9vw] top-[-0.25em] absolute text-center text-white 2xl:text-[1.4em] xl:text-[1em] font-normal font-['Arial'] leading-loose">08</div>
                      </div>
            </div>
         </div>
        <!--topic3-->
         <div class="DivMkdItemTextHolder w-[31.5vw] h-[12.6vh] left-0 top-[25.9vh] absolute bg-white border border-zinc-300">
                  <div class=" w-[26.5vw] left-[4.2vw] top-[0.8em] absolute text-justify text-gray-700 2xl:text-[1.6em] xl:text-[1.2em] font-normal font-['Amiri'] ">69 م د: فسخ عقد مبرم بين الغير (عدم قبول لعدم المصلحة)‎</div>
                  <div class="Frame275 w-[10vw] left-[23vw] top-[7.8vh] absolute justify-center items-center 2xl:gap-1.5 xl:gap-1.2 inline-flex">
                        <div class=" text-orange-400 2xl:text-xl xl:text-lg font-bold font-['Amiri'] ">القضاء المدني‎</div>
                        <div class="Frame w-[0.7vw] h-[1.3] relative"></div>
                  </div>
              
            <div class="Group93 w-[3.1vw] h-[7.2vh] left-[-1.9em] top-[1.1em] absolute">
                      <div class="SpanMkdPostInfoDateDay w-[3.1vw] h-[5.7vh]  left-0 2xl:top-0 xl:top-[-0.5vh] absolute bg-gray-700">
                        <div class=" w-[1.5vw] h-[2.7vh] left-[0.8vw] top-0 absolute text-center text-white 2xl:text-[1.5em] xl:text-[1.1em] font-black font-['Roboto'] leading-[50px]">18</div>
                      </div>
                      <div class="SpanMkdPostInfoDateMonth w-[3.1vw] h-[3.8vh] left-0 top-[5vh]  absolute bg-orange-400">
                        <div class=" left-[0.9vw] top-[-0.25em] absolute text-center text-white 2xl:text-[1.4em] xl:text-[1em] font-normal font-['Arial'] leading-loose">08</div>
                      </div>
            </div>
         </div>
          
    </div>
    <div class="Frame320 w-[31.5vw] 2xl:left-[69.5vh] xl:left-[70.5vh] top-[2.2vh] absolute justify-end items-center gap-[1.3em] inline-flex">
      <div class=" w-[27.5vw] text-right text-orange-400  2xl:text-[1.5em] xl:text-[1.2em] font-bold font-['EL Meesiri'] ">69 م د: فسخ عقد مبرم بين الغير ( عدم قبول لعدم المصلحة )‎</div>
      <div class="Frame309 w-[2.9vw] h-[5.1vh] flex-col justify-start items-center inline-flex">
        <div class="Group49 w-[2.9vw] h-[5.1vh] relative">
          <img class="Regulation w-[2.9vw] h-[5.1vh] left-0 top-0 absolute" src="https://via.placeholder.com/55x55" />
          <div class="Regulation w-[2.9vw] h-[5.1vh] left-0 top-0 absolute bg-orange-400"></div>
        </div>
        <div class=" w-[3.9vw] h-[2.1vh] left-[27.8vw] top-[8vh] absolute text-center text-white 2xl:text-sm xl:text-[0.65em] font-normal font-['Arial'] capitalize">القضاء المدني</div>
      </div>
    </div>
    <div class="Line43 w-[30.9vw] h-[0px] left-[66.6vw] top-[14vh] absolute origin-top-left rotate-[180deg] shadow border border-stone-400/opacity-50"></div>
    <div class="BtnKeepRead w-11 h-[13.8vh] left-[58.2vw] top-[32.8vh] absolute origin-top-left -rotate-90 bg-orange-400 rounded-[3px]">
      <div class="Frame273 left-[1.7vw] 2xl:top-[3.5vh] xl:top-[2.5vh] absolute flex-col justify-center items-center gap-2 inline-flex">
        <div class=" w-[5.2vw] h-[2.4vh] xl:ml-[0.9em]  origin-top-left rotate-90 text-center text-white 2xl:text-[0.9em] xl:text-[0.75em] font-bold font-['El Messiri'] ">واصل القراءة</div>
      </div>
      <div class="Btndarken w-[2.2vw] h-11 2xl:left-[2.3vw] xl:left-[3.2vw] top-0 absolute origin-top-left rotate-90 opacity-50 bg-orange-400 rounded-tl-[3px] rounded-bl-[3px]"></div>
    </div>
    <div class="Menu w-[13.2vw] h-[7.9vh] left-[35.1vw] top-[25.3vh] absolute justify-start items-start inline-flex">
      <div class="DivMkdPostInfoDate w-[4.4vw] h-[7.9vh] relative border border-white">
        <div class="Copy left-[1.2vw] top-[1.8vh] absolute justify-start items-start gap-2.5 inline-flex"></div>
      </div>
      <div class="DivMkdPostInfoCommentsHolder w-[4.4vw] h-[7.9vh] relative border border-gray-200">
        <div class="Comment py-0.5 left-[0.9vw] top-[1.6vh] absolute bg-black/opacity-0 flex-col justify-start items-start gap-2.5 inline-flex"></div>
      </div>
      <div class="AMkdSocialShareDropdownOpener w-[4.4vw] h-[7.9vh] relative border border-white">
        <div class="Share left-[1vw] top-[6vh] absolute justify-start items-start gap-2.5 inline-flex"></div>
      </div>
    </div>
    <div class=" w-[31.3vw] h-[10.6vh] left-[35.1vw] top-[15vh] absolute text-right text-white 2xl:text-[1.4em] xl:text-[1em] font-normal font-['El Messiri'] uppercase leading-normal">المصلحة الشخصية المشروعة المباشرة شرط لقبول الدعوى. مِلاكها أن يكون للمدعي من وراء التجائه إلى القضاء منفعةٌ حقيقة،</div>
    
  </div>
  </div>
  </div>
</div>
</section>
   <!--sectiom-2 End-->

  <!--sectiom-3 last topic-->
  <section>

    <div
      class="w-full relative bg-gray overflow-hidden flex flex-row flex-wrap items-start justify-start pt-[1.25rem] px-[2.25rem] pb-[2.937rem] box-border leading-[normal] tracking-[normal]"
    >
      <img
        class="h-[59.063rem] w-[120.188rem] absolute  max-w-full z-[1]"
        alt="background image"
        src="{{ asset('images/section3bg.png') }}"
      />

      <img
        class="h-full w-full absolute !m-[0] top-[0rem] bottom-[0rem] left-[-0.062rem] max-h-full object-cover  "
        alt="background color"
        src="{{ asset('images/section3bgc.png') }}"
      />

      <main
        class="w-[112.5rem] flex flex-col items-center justify-center pt-[9.3vh]  box-border max-w-full mq450:pt-[2.625rem] mq450:box-border mq1225:pt-[4.063rem] mq1225:box-border"
      >
        <section
          class="self-stretch flex flex-col items-center justify-center   box-border gap-[3rem] max-w-full z-[2] text-center  text-white  mq850:gap-[1.75rem] mq850:pb-[2.125rem] mq850:box-border mq450:pb-[1.375rem] mq450:box-border"
        >
          <div
            class="self-stretch flex flex-row items-start justify-center  box-border max-w-full"
          >
            <div
              class=" flex flex-col items-end justify-start gap-[2rem] max-w-full"
            >
              <h1
                class="m-0 self-stretch relative text-[1.5rem] xl:text-[2.5rem] 2xl:text-[3rem] leading-[114.6%] font-normal font-['El Messiri'] shrink-0 [debug_commit:bf4bc93] mq850:text-[2.5rem] mq850:leading-[2.875rem] mq450:text-[1.2rem] xl:text-[1.4rem] 2xl:text-[1.6rem] mq450:leading-[2.125rem]"
              style="font-family:'El Messiri';">
                مختارات‎
              </h1>
              <div
                class="self-stretch flex flex-row items-center justify-center "
              >
                <img
                  class=" relative shrink-0 [debug_commit:bf4bc93]"
                  loading="lazy"
                  alt=""
                  src="{{ asset('images/Icon.svg') }}"
                />
              </div>
            </div>
          </div>
          <div
            class="self-stretch flex flex-row items-center justify-center pb-[10vh] max-w-full text-right text-[2.5rem] font-font mq850:gap-[1rem] mq1525:flex-wrap"
          >
            <div
              class=" col1 flex-1 flex flex-col items-center justify-center  box-border min-w-[18vw] max-w-full shrink-0 mq850:min-w-full"
            >
              <div
                class=" self-stretch flex flex-col items-center justify-center  box-border gap-[6vh] max-w-full mq850:gap-[2.438rem] mq450:gap-[1.188rem]"
              >
                <div
                  class="row1 self-stretch flex flex-row items-start justify-center box-border gap-[2rem] max-w-full mq850:flex-wrap mq850:gap-[1.438rem]"
                >
                  <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon1.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row2 self-stretch flex flex-row items-start justify-center box-border gap-[2.787rem] max-w-full mq850:flex-wrap mq850:gap-[1.375rem]"
                >
                <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon2.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row3 self-stretch flex flex-row items-start justify-center  box-border gap-[2.875rem] max-w-full mq850:flex-wrap mq850:gap-[1.438rem]"
                >
                <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon3.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img
              class="h-[58vh] w-[0.4vw] mx-[1vw] relative"
              loading="lazy"
              alt=""
              src="{{ asset('images/IconHline.png') }}"
            />

            <div
              class=" col2 flex-1 flex flex-col items-center justify-center  box-border min-w-[18vw] max-w-full shrink-0 mq850:min-w-full"
            >
              <div
                class=" self-stretch flex flex-col items-center justify-center  box-border gap-[6vh] max-w-full mq850:gap-[2.438rem] mq450:gap-[1.188rem]"
              >
                <div
                  class="row1 self-stretch flex flex-row items-start justify-center box-border gap-[2rem] max-w-full mq850:flex-wrap mq850:gap-[1.438rem]"
                >
                  <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon4.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row2 self-stretch flex flex-row items-start justify-center box-border gap-[2.787rem] max-w-full mq850:flex-wrap mq850:gap-[1.375rem]"
                >
                <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon5.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row3 self-stretch flex flex-row items-start justify-center  box-border gap-[2.875rem] max-w-full mq850:flex-wrap mq850:gap-[1.438rem]"
                >
                <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon6.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img
              class="h-[58vh] w-[0.4vw] mx-[1vw] relative"
              loading="lazy"
              alt=""
              src="{{ asset('images/IconHline.png') }}"
            />

            <div
              class=" col3 flex-1 flex flex-col items-center justify-center  box-border min-w-[18vw] max-w-full shrink-0 mq850:min-w-full"
            >
              <div
                class=" self-stretch flex flex-col items-center justify-center  box-border gap-[6vh] max-w-full mq850:gap-[2.438rem] mq450:gap-[1.188rem]"
              >
                <div
                  class="row1 self-stretch flex flex-row items-start justify-center box-border gap-[2rem] max-w-full mq850:flex-wrap mq850:gap-[1.438rem]"
                >
                  <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon7.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row2 self-stretch flex flex-row items-start justify-center box-border gap-[2.787rem] max-w-full mq850:flex-wrap mq850:gap-[1.375rem]"
                >
                <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon8.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row3 self-stretch flex flex-row items-start justify-center  box-border gap-[2.875rem] max-w-full mq850:flex-wrap mq850:gap-[1.438rem]"
                >
                <div
                    class="w-[20.8vw] flex flex-col items-center justify-center gap-[2.95rem] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[1.5rem]"
                  >
                    <h1
                    class="left-[4vw] m-0 self-stretch h-[2vh] relative  font-normal font-'Noto Kufi Arabic' flex items-center shrink-0 text-[0.8rem] 2xl:text-[2rem] lg:text-[1.5rem] lg:leading-[1.5rem]  sm:text-[1rem] sm:leading-[1.125rem]"
                    style="font-family:'Noto Kufi Arabic';">
                      عدم تنفيذ عقد عمل
                    </h1>
                    <h3
                    class="m-0 w-[18.6vw] h-[4vh] relative text-[0.5rem] leading-[2.5rem] font-normal font-['El Messiri'] text-silver text-justify flex items-center shrink-0 max-w-full  md:text-[1rem] md:leading-[2rem] 2xl:text-[1.2rem] sm:text-[0.9rem] sm:leading-[1.5rem]"
                    style="font-family:'El Messiri';direction:rtl;">
                      هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                    </h3>
                  </div>
                  <div
                    class="flex flex-col h-[14vh] items-center justify-start pt-[0rem] px-[0rem] pb-[1.012rem] text-left text-[1.25rem]"
                  >
                    <div
                      class="flex flex-col  items-center justify-start shrink-0 [debug_commit:bf4bc93]"
                    >
                      <div
                        class="flex flex-row items-start justify-start "
                      >
                        <img
                          class="2xl:h-[8vh] 2xl:w-[4vw] lg:h-[4vh] lg:w-[2vw] h-[2vh] w-[1vw]  relative object-cover"
                          loading="lazy"
                          alt=""
                          src="{{ asset('images/mokhIcon9.png') }}"
                        />
                      </div>
                      <div
                        class="relative  pt-[1vh] capitalize inline-block min-w-[7vw] text-[0.5rem]  lg:text-[1rem] 2xl:text-[1.2rem]"
                      >
                        قرارات قضائية
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </main>
      <div
        class="w-[19.688rem] flex flex-row items-center justify-center gap-[1.25rem] z-[2] ml-[-59vw] 2xl:ml-[-55vw]"
      >
        <div
          class="flex-1 flex flex-col items-start justify-start pt-[2.375rem] px-[0rem] pb-[0rem]"
        >
          <div
            class="self-stretch h-[0.063rem] relative box-border border-b-[1px] border-solid border-saddlebrown"
          ></div>
        </div>
        <img
          class="h-[4.813rem] w-[5rem] relative object-cover"
          loading="lazy"
          alt=""
          src="{{ asset('images/bars.png') }}"
        />

        <div
          class="flex-1 flex flex-col items-start justify-start pt-[2.375rem] px-[0rem] pb-[0rem]"
        >
          <div
            class="self-stretch h-[0.063rem] relative box-border border-b-[1px] border-solid border-saddlebrown"
          ></div>
        </div>
      </div>
    </div>
 
  </section>
<!--end of section 3-->
<!--start of section 4-->
<section>
      <!--Footer start-->
      
      <div
      class="w-full relative h-[44.25rem] bg-black box-border overflow-hidden flex flex-row items-start justify-start py-[1.625rem] pr-[3.375rem] pl-[6.75rem] gap-[1.375rem] leading-[normal] tracking-[normal] text-right text-[1.875rem] text-white font-['Noto Kufi Arabic'] border-[1px] border-solid border-darkgoldenrod mq850:pl-[1.688rem] mq850:box-border mq1225:pl-[3.375rem] mq1225:pr-[1.688rem] mq1225:box-border mq1550:flex-wrap"
    >
      <footer
        class="2xl:h-[44.25rem] h-[31rem] w-[84.3rem] 2xl:w-[120.375rem] relative bg-gray-100 box-border hidden max-w-full border-t-[1px] border-solid border-darkgoldenrod"
      ></footer>
      <div
        class="2xl:w-[29.375rem] w-[20.6rem]  flex flex-col items-start justify-start pt-[6.75rem] pb-[0rem] pr-[1.625rem] pl-[0rem] box-border max-w-full mq850:pt-[4.375rem] mq850:box-border"
      >
        <div
          class="self-stretch flex flex-col items-end justify-start gap-[0.656rem] max-w-full"
        >
          <div
            class="self-stretch flex flex-col items-end justify-start gap-[0.937rem] max-w-full"
          >
            <div
              class="2xl:w-[10.188rem] w-[7.13rem] flex flex-row items-start justify-start gap-[0.918rem]"
            >
              <a
                class="[text-decoration:none] h-[1.188rem] flex-1 relative leading-[1.5rem] uppercase text-[inherit] flex items-center z-[1] mq850:text-[1.5rem] mq850:leading-[1.188rem] mq450:text-[1.125rem] mq450:leading-[0.875rem]"
                style="font-family:'Noto Kufi Arabic'; direction:rtl;">تواصل‎</a
              >
              <div
                class="flex flex-col items-start justify-start pt-[0.062rem] px-[0rem] pb-[0rem]"
              >
                <img
                  class="2xl:w-[1.7rem] w-[1.19rem] h-[1.05rem] 2xl:h-[1.5rem] relative overflow-hidden shrink-0 z-[1]"
                  loading="lazy"
                  alt=""
                  src="{{ asset('images/envelop.png') }}"
                />
              </div>
            </div>
            <div
              class="self-stretch flex flex-row items-start justify-start py-[0rem] pr-[0.062rem] pl-[0rem] box-border max-w-full  text-whitesmoke"
            >
              <div
                class="flex-1 bg-[#21262C] box-border flex flex-row items-start justify-end pt-[0rem] pr-[0.3rem] pb-[0.5rem] whitespace-nowrap max-w-full z-[1] border-[1px] border-solid border-[#474747]"
              >
                <div
                  class="2xl:h-[1.875rem] h-[1.3rem] 2xl:text-[1.2rem] text-[1rem]  relative pr-[0.125rem] flex items-center max-w-full"
                  style="font-family:'Noto Kufi Arabic'; direction:rtl;">
                    بريدك الإلكتروني * 
                </div>
              </div>
            </div>
          </div>
          <div
            class="self-stretch 2xl:h-[19.438rem]  flex flex-row items-start justify-end py-[0rem] pr-[0.062rem] pl-[0rem] box-border text-[1.563rem] text-whitesmoke"
          >
            <label class="cursor-pointer" for="file-loco-0032-s8a-96:783">
              <div
                class="2xl:h-[19.438rem] h-[13.6rem] w-[19rem] 2xl:w-[27.688rem] bg-[#21262C] box-border flex flex-row items-start justify-start pt-[0.125rem] px-[1.062rem] pb-[17.437rem] relative z-[1] border-[1px] border-solid border-[#474747]"
              >
                <div
                  class="2xl:h-[1.875rem] 2xl:w-[25.188rem] h-[1.33rem] w-[17.4rem] 2xl:text-[1.2rem] text-[1rem] relative flex items-center shrink-0 mq450:text-[1.25rem]"
                  style="font-family:'Noto Kufi Arabic'; direction:rtl;">
                  نص الرسالة‎ ...
                </div>
                <img
                  class="2xl:h-[24.669rem] h-[16.8rem] w-[17.5rem] 2xl:w-[25rem] absolute !m-[0] bottom-[-7.669rem] left-[-2.812rem] object-cover z-[2]"
                  loading="lazy"
                  alt=""
                  src="{{ asset('images/ayah1.png') }}"
                />
              </div>
            </label>
            <input class="hidden" type="file" id="file-loco-0032-s8a-96:783" />
          </div>
          <div
            class="flex flex-row items-start justify-end py-[0rem] px-[0.062rem] text-center text-[1.5rem]"
          >
            <div
              class="2xl:h-[2.625rem] h-[1.8rem] w-[5rem] bg-[#A6743E] 2xl:w-[7.25rem] rounded-10xs  box-border flex flex-row items-center justify-center pt-[0rem] px-[0rem] pb-[0.187rem] z-[1] border-[1px] border-solid border-yellow-800"
            >
              <div
                class="ml-[-0.144rem] text-[0.9rem] 2xl:[1.4rem]  flex-1 relative leading-[2.563rem] uppercase [text-shadow:0.3px_0_0_#fff,_0_0.3px_0_#fff,_-0.3px_0_0_#fff,_0_-0.3px_0_#fff] shrink-0 [debug_commit:69da668] mq450:text-[1.188rem] mq450:leading-[2.063rem]"
              style="font-family:'Noto kufi Arabic';">
                إرسال‎
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="2xl:h-[33.8rem] h-[23.66rem] flex flex-col items-start justify-start 2xl:pt-[4.187rem] pt-[] px-[0rem] pb-[0rem] box-border mq850:pt-[2.75rem] mq850:box-border mq1550:hidden"
      >
        <div class="2xl:w-[0.25rem] w-[0.175rem] flex-1 relative bg-silver z-[1]"></div>
      </div>
      <section
        class="flex-1 flex flex-col items-start justify-start gap-[2.937rem] min-w-[50.563rem] max-w-full text-right text-[1.875rem] text-white font-zahra-arabic mq850:gap-[1.438rem] mq1225:min-w-full"
      >
        <div
          class="self-stretch flex flex-row items-start justify-start gap-[0.793rem] max-w-full mq1225:flex-wrap"
        >
          <div
            class="flex flex-col items-start justify-start pt-[4rem] pb-[0rem] pr-[2rem] pl-[0rem] box-border max-w-full mq450:pt-[4.188rem] mq450:box-border"
          >
            <div
              class="flex flex-col items-end justify-start gap-[1.437rem] max-w-full"
            >
              <div
                class="2xl:w-[17.688rem] w-[12.4rem] flex flex-row items-start justify-end pt-[0rem] px-[0.187rem] pb-[0.5rem] box-border"
              >
                <div
                  class="flex-1 relative leading-[1.188rem] uppercase z-[1] 2xl:text-[1.4rem] text-[1.2rem] mq450:leading-[0.875rem]"
                style="font-family:'Noto Kufi Arabic'; direction:rtl;">
                  شارك الصفحة بواسطة:
                </div>
              </div>
              <div
                class="flex flex-row items-start justify-end pt-[0rem] pb-[0.5rem]  pl-[0rem] box-border max-w-full"
              >
                <div
                  class="2xl:w-[31.25rem] w-[21.9rem] overflow-hidden shrink-0 flex flex-row items-start justify-end pt-[0.625rem] pb-[0.562rem] box-border gap-[1.437rem] max-w-full z-[1] mq850:flex-wrap mq850:justify-center mq850:pl-[6.063rem] mq850:pr-[1.938rem] mq850:box-border mq450:pl-[1.25rem] mq450:box-border"
                >
                  <div
                    class="flex flex-col items-start justify-start pt-[0.093rem] px-[0rem] pb-[0rem]"
                  >
                    <img
                      class="2xl:w-[3.5rem] 2xl:h-[3.5rem] w-[2.5rem] h-[2.5rem] pb-[0.5rem]  relative overflow-hidden shrink-0"
                      loading="lazy"
                      alt=""
                      src="{{ asset('images/whatsapp.png') }}"
                    />
                  </div>
                  <div
                    class="2xl:h-[3rem] h-[2.1rem] 2xl:w-[0.063rem] w-[0.0441rem] relative box-border shrink-0 border-r-[1px] border-solid border-gray-200 mq850:w-full mq850:h-[0.063rem]"
                  ></div>
                  <div
                    class="flex flex-col items-start justify-start pt-[0.25rem] px-[0rem] pb-[0rem]"
                  >
                    <img
                      class="2xl:w-[2.8rem] 2xl:h-[2.8rem] w-[1.96rem] h-[1.96rem]relative overflow-hidden shrink-0"
                      loading="lazy"
                      alt=""
                      src="{{ asset('images/viber.png') }}"
                    />
                  </div>
                  <div
                  class="2xl:h-[3rem] h-[2.1rem] 2xl:w-[0.063rem] w-[0.0441rem] relative box-border shrink-0 border-r-[1px] border-solid border-gray-200 mq850:w-full mq850:h-[0.063rem]"
                  ></div>
                  <div
                    class="flex flex-col items-start justify-start pt-[0.25rem] px-[0rem] pb-[0rem]"
                  >
                    <img
                      class="2xl:w-[2.8rem] 2xl:h-[2.8rem] w-[1.96rem] h-[1.96rem] relative overflow-hidden shrink-0"
                      loading="lazy"
                      alt=""
                      src="{{ asset('images/facebook.svg') }}"
                    />
                  </div>
                  <div
                  class="2xl:h-[3rem] h-[2.1rem] 2xl:w-[0.063rem] w-[0.0441rem] relative box-border shrink-0 border-r-[1px] border-solid border-gray-200 mq850:w-full mq850:h-[0.063rem]"
                  ></div>
                  <div
                    class="flex flex-col items-start justify-start pt-[0.25rem] px-[0rem] pb-[0rem]"
                  >
                  <img
                      class="2xl:w-[2.8rem] 2xl:h-[2.8rem] w-[1.96rem] h-[1.96rem] relative overflow-hidden shrink-0"
                      loading="lazy"
                      alt=""
                      src="{{ asset('images/messenger.png') }}"
                    />
                  </div>
                </div>
              </div>
              <div
                class="2xl:w-[25.5rem] 2xl:h-[0.75rem] w-[17.85rem] h-[0.525rem] flex flex-row items-start justify-end pt-[0rem] px-[0.375rem] pb-[0.5rem] box-border max-w-full"
              >
                <div
                  class="h-[24.75rem] w-[0.25rem] relative bg-silver [transform:_rotate(-90deg)] z-[1]"
                ></div>
              </div>
              <div
                class="2xl:w-[30.313rem] w-[21.22rem] flex flex-row items-start justify-end py-[0rem]  box-border max-w-full text-[2rem]"
              >
                <div
                  class="flex-1 relative leading-[3rem] uppercase z-[1] 2xl:text-[1.5rem] text-[1rem]"
                style="font-family:'Noto Kufi Arabic';">
                  اشترك في نشرة أخبار الموقع
                </div>
              </div>
              <div
                class="2xl:w-[30.063rem] w-[21rem] flex flex-col items-end justify-start  max-w-full text-justify  text-lightgray "
              >
                <div
                  class="2xl:w-[38rem] w-[22rem] flex flex-row items-start justify-end py-[0rem]  box-border max-w-full"
                >
                  <div
                    class="2xl:h-[2.125rem] h-[1.48rem] flex-1 relative  flex items-center max-w-full z-[1] 2xl:text-[1.1rem] text-[0.9rem]"
                    style="font-family:'Noto Kufi Arabic'; direction:rtl;">
                    لاستقبال إشعارات المواضيع الجديدة، يرجى الاشتراك
                  </div>
                </div>
                <div
                  class="self-stretch 2xl:h-[4.8rem] h-[4.8rem] overflow-hidden shrink-0 flex flex-row items-start justify-end pt-[1.625rem] px-[0rem] pb-[0rem] box-border max-w-full z-[1] text-right text-[1.563rem] text-whitesmoke font-zahra-arabic"
                >
                  <div
                    class="2xl:w-[24.781rem] w-[17.3rem] bg-[#21262C] box-border flex flex-row items-center justify-start pt-[0.125rem] px-[0.375rem] pb-[0.437rem] max-w-[calc(100%_-_0px)] shrink-0 border-[1px] border-solid border-[#474747]"
                  >
                    <img
                      class="2xl:h-[1.5rem] 2xl:w-[1.5rem] w-[1.2rem] h-[1.2rem] relative overflow-hidden shrink-0"
                      loading="lazy"
                      alt=""
                      src="{{ asset('images/messenger.png') }}"
                    />

                    <div
                      class="2xl:w-[21.844rem] w-[15.3rem]  flex flex-col items-start justify-start py-[0rem] px-[0rem] box-border max-w-[calc(100%_-_24px)]"
                    >
                      <div
                        class="ml-[-0.719rem] w-[22.563rem]  relative flex items-start max-w-[104%] text-[1rem] 2xl:text-[1.3rem] shrink-0 mq450:text-[1.25rem]"
                      style="font-family:'Noto Kufi Arabic'; direction:rtl;">
                        بريدك الإلكتروني*
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="2xl:h-[33.8rem] h:[] flex flex-col items-start justify-start pt-[4.187rem] px-[0rem] pb-[0rem] box-border mq850:pt-[2.75rem] mq850:box-border"
          >
            <div class="w-[0.25rem] flex-1 relative bg-silver z-[1]"></div>
          </div>
          <div
            class="flex-1 overflow-hidden flex flex-col items-end justify-start pt-[0rem] pb-[0.875rem] pr-[2.125rem] pl-[2.062rem] box-border gap-[0.312rem] opacity-[0.74] min-w-[27.438rem] max-w-full z-[1] text-justify text-[1.688rem] text-snow font-sakkal-majalla mq850:min-w-full"
          >
            <img
              class="w-[5.025rem] h-[7.5rem] relative object-cover"
              loading="lazy"
              alt=""
              src="{{ asset('images/footerLogo.png') }}"
            />

            <div class="self-stretch flex flex-col items-end justify-start">
              <div
                class="self-stretch 2xl:h-[37vh] h-[25.9vh] 2xl:pt-[0rem] 2xl:top-[-2rem]  pt-[8rem] relative 2xl:leading-[120%] flex items-center shrink-0 z-[1] mq450:text-[0.8rem] mq450:leading-[0.8rem]"
              >
                <span>
                  <p class="m-0 lg:text-[0.9rem] 2xl:text-[1.25rem] " style="font-family:'Noto Kufi Arabic'; direction:rtl;">
                    وبعد، فمنذ الصبا، واهتمامات شتى تتجاذبني، لا يخلو أي منها من
                    الفائدة. لكنها متمايزة فلا يبدو لي من رباط بينها غير حبّ
                    العمل، والنفور من إهدار الوقت والكسل. وبقدر ما حمدت الله
                    تعالى على ما حققه لي ذلك من رضا، أدركت أن العرفان الحقيقي
                    بفضله سبحانه لا يكون بالحمد على النعم باللسان فقط، بل بهذا
                    مقروناً بالفعل، وأنه لا أجزأ لي من الإفاضة على الغير ببعض ما
                    أملك مصداقاً لأمره جلّ وعلا: “وَأَحْسِن كَمَا أَحْسَنَ
                    اللَّهُ إِلَيْكَ”. فطنت حينئذٍ إلى أن كثيراً من أنفاس زماني
                    كانت في الحقيقة قد غادرت فارغة. فالتشتت استنفد وسعي ووقتي،
                    ولم يحظ أيُّ جانب بالوافر اللازم ليتمخض عما يصلح بذله. فلا
                    عجب أنْ لم يتعد جلُّ ما نتج الفتات في هذا المجال وفي ذاك.
                  </p>
                </span>
              </div>
              <div
                class="flex flex-row items-start justify-end py-[0rem] px-[0.25rem] 2xl:mt-[-0.938rem] mt-[10rem]"
              >
                <button
                  class="cursor-pointer pt-[0rem] px-[0.687rem] pb-[0.25rem] bg-yellow-500 rounded-10xs flex flex-row items-center justify-start gap-[1.412rem] border-[1px] border-solid border-yellow-700"
                >
                  <div
                    class="flex flex-col items-center justify-start pt-[0.5rem] px-[0rem] pb-[0.5rem]"
                  >
                    <img
                      class="w-[0.469rem] h-[0.938rem] relative object-contain"
                      alt=""
                      src="{{ asset('images/arrowleft.png') }}"
                    />
                  </div>
                  <div
                    class="w-[4.75rem] relative 2xl:text-[1.2rem] text-[1rem] leading-[2.563rem] uppercase  text-white text-right flex items-center shrink-0 [text-shadow:0.3px_0_0_#fff,_0_0.3px_0_#fff,_-0.3px_0_0_#fff,_0_-0.3px_0_#fff] whitespace-nowrap mq450:text-[1.188rem] mq450:leading-[2.063rem]"
                 style="font-family:'Noto Kufi Arabic'; direction:rtl;" >
                    سيرة ذاتية‎
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div
          class="w-[31.7vw]  flex flex-row items-start justify- py-[0rem] 2xl:px-[4.187rem] box-border max-w-full text-[1.563rem] mq850:pl-[2.063rem] mq850:pr-[2.063rem] mq850:box-border"
        >
          <div
            class="h-[1.5rem] flex-1 relative leading-[1.5rem] flex items-center max-w-full z-[1] text-[1rem] mq450:leading-[1.188rem]"
          style="direction:rtl;">
            © دربال، جميع الحقوق محفوظة، 2024 ، ضد الاستعمال التجاري.
          </div>
        </div>
      </section>
    </div>

      <!--Footer start-->
</section>
<!--end of section 4-->
 
      
<script>
     // JavaScript for changing subtitle text
     document.addEventListener('DOMContentLoaded', function () {
            const subtitles = [
                "آخر الموضوعات", // Initial text
               " و أهم الإضافات الاخيرة",
                "الى مختلف الفروع"
            ];
            let currentSubtitleIndex = 0;
            const subtitleElement = document.getElementById('subtitle');

            function changeSubtitle() {
                subtitleElement.textContent = subtitles[currentSubtitleIndex];
                currentSubtitleIndex = (currentSubtitleIndex + 1) % subtitles.length;
            }

            setInterval(changeSubtitle, 5000); // Change subtitle every 5 seconds

            // JavaScript for looping GIF background
            const section = document.getElementById('section-2');
            function updateBackground() {
                const uniqueGifUrl = "{{ asset('images/section2bg.gif') }}?v=" + new Date().valueOf();
                section.style.backgroundImage = "url('" + uniqueGifUrl + "')";
            }

            // Update the background every 10 seconds (or choose your interval)
            setInterval(updateBackground, 10000);
            // Initial background set
            updateBackground();
        });
        //rows animation
        document.addEventListener("DOMContentLoaded", () => {
    // Helper function to check if an element is in the viewport
    const isInViewport = (element) => {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    };

    // Function to add animation class when elements come into view
    const handleScroll = () => {
      const rows = document.querySelectorAll(".row1, .row2, .row3");

      rows.forEach((row, index) => {
        if (isInViewport(row)) {
          setTimeout(() => {
            row.classList.add("animate");
          }, index * 300); // Delay each row's animation by 300ms
        }
      });
    };

    // Listen to scroll events
    window.addEventListener("scroll", handleScroll);
    
    // Initial check in case elements are already in view on load
    handleScroll();
  });
</script>
  </body>
</html>
