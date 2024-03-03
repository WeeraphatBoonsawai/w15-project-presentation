@extends('layouts.app')

@section('nav')
<a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-sky-500 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/home') }}">HOME</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/about') }}">ABOUT</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/views') }}">TALENTS</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/blogmusic') }}">MUSIC</a>
@endsection

@section('content')

  <div class="bg-cyan-500 py-20">
    <div class="max-w-screen-lg mx-auto flex justify-between items-center">
      <div class="max-w-xl">
        <h2 class="font-black text-sky-950 text-3xl mb-4">Welcome To <br> <span class="text-5xl">Hololive</span> </h2>
        <p class="text-base text-sky-950">
            Hololive Production is a virtual YouTuber agency owned by Japanese tech entertainment company Cover Corporation.
        </p>
      </div>
      <a href="{{ url('/about') }}">
      <button class="text-sky-950 uppercase py-3 text-base px-10 border border-sky-950 hover:bg-sky-950 hover:bg-opacity-10">
        About
    </button>
</a>
    </div>
  </div>

  

  <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
    <img src="{{ asset("images\home\wp10025242.png") }}" class="scale-150 absolute top-0 left-0 min-h-full ob" alt="">
    <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
      <div class="col-span-6">
        <span class="uppercase text-white text-xs font-bold mb-2 block">Welcome To Hololive</span>
        <h1 class="text-white font-extrabold text-5xl mb-8">TALENT</h1>
        <p class="text-stone-100 text-base">
            The name hololive was initially used for COVER's 3D stream distribution app, launched in December 2017, and later its female VTuber agency, whose first generation debuted from May to June 2018. In December 2019, this hololive branch was merged with COVER's male HOLOSTARS agency and INoNaKa (INNK) Music label to form a unified "hololive production" brand. In 2019 and 2020, the agency debuted three overseas branches: hololive China (since disbanded), hololive Indonesia, and hololive English. In 2023, hololive debuted a new branch, hololive DEV_IS.
        </p>
        <a href="{{ url('/views') }}">
        <button class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">
            TALENTS
        </button>
    </a>
      </div>
    </div>
  </div>

  

  <center class="py-12">

    <div class="flex flex-col text-center w-full mt-4">
        <h1 class="text-6xl font-medium title-font mb-4 text-cyan-500">hololive 5th fes. Capture the Moment</h1>
       
      </div>
      <iframe width="1260" height="720"  src="https://www.youtube.com/embed/b4ySWv-8v1E" title="《hololive 5th fes. Capture the Moment》PV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</center>

  <div class="py-12 relative overflow-hidden bg-white">
    <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
      <div class="w-full flex flex-col items-end pr-16">
        <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">hololive 5th fes.</h2>
        <div class="h-full mt-auto overflow-hidden relative">
          <img src="{{ asset("images\home\kv_5thfes_stage1.png") }}" class="h-full w-full object-contain" alt="">
        </div>
      </div>

      
  
      <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-cyan-500 before:top-0 before:left-0">
        <div class="relative z-20 pl-12">
          <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">hololive 5th fes. Capture the Moment</h2>
          <p class="text-white text-sm">
            2024.3.16SAT-3.17SUN<br>
            in MAKUHARI MESSE INTERNATIONAL EXHIBITION HALL 1-3
          </p>
          <a href="https://hololivesuperexpo2024.hololivepro.com/en/fes">
          <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">
            Read more
          </button>
        </a>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="py-4 relative overflow-hidden bg-white">
    <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
      
  
      <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-[#f7d0b6] before:top-0 before:right-0">
        <div class="relative z-20 pl-12">
          <h2 class="text-cyan-500 font-black text-5xl leading-snug mb-10">Capture The Moment in PAST to 5th Fes. - DAY 5</h2>
          <p class="text-sky-950 text-sm">
            Preparing for the live concert with the new members and the first appearance on stage of Vestia Zeta / Kaela Kowalskia and Kobo Kanaeru. Last time there were 13 people together, but this year there were fewer than the previous generation. Any other I won't abandon my idol's image. Don't forget to follow the show and send cheers from holoID Gen 3 members on Day 1 Stage 2 on March 16, Thai time, 7 p.m.
          </p>
<a href="https://www.youtube.com/@NanashiMumei">
          <button class="mt-8 text-sky-950 uppercase py-3 text-sm px-10 border border-sky-950 hover:bg-white hover:bg-opacity-10">
            Read more
        </button>
    </a>
        </div>
      </div>
      <div class="w-full flex flex-col pl-16">
        <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-left mb-12 mt-10">hololive 5th fes.</h2>
        <div class="h-full mt-auto overflow-hidden relative">
          <img src="{{ asset("images\home\kv_5thfes_stage2.png") }}" class="h-full w-full object-contain" alt="">
        </div>
      </div>
  
    </div>
  </div>
  
  <div class="py-12 relative overflow-hidden bg-white">
    <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
      <div class="w-full flex flex-col items-end pr-16">
        <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">hololive 5th fes.</h2>
        <div class="h-full mt-auto overflow-hidden relative">
          <img src="{{ asset("images\home\kv_5thfes_stage3.png") }}" class="h-full w-full object-contain" alt="">
        </div>
      </div>
  
      <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-cyan-500 before:top-0 before:left-0">
        <div class="relative z-20 pl-12">
          <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">hololive to Collaborate with HoneyWorks</h2>
          <p class="text-white text-sm">
            Set for March 16th and 17th, 2024, more information on the hololive 5th fes. and hololive SUPER EXPO has finally been announced! Officially dubbed “Capture the Moment”, the festival supported by Bandai and Bushiroad will feature three hololive main stages and one special stage in collaboration with HoneyWorks.
          </p>
<a href="https://hololivetoday.com/news">
          <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">
            Read more
        </button>
    </a>
        </div>
      </div>
    </div>
  </div>
  
@endsection
