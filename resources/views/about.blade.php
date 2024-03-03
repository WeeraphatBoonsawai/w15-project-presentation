@extends('layouts.app')

@section('title')
View
@endsection

@section('nav')

<a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
href="{{ url('/home') }}">HOME</a>

<a class="px-4 py-2 mt-2 text-sm font-semibold bg-sky-500 rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
href="{{ url('/about') }}">ABOUT</a>

<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
href="{{ url('/views') }}">TALENTS</a>

<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
href="{{ url('/blogmusic') }}">MUSIC</a>


@endsection

@section('content')
<div class="flex flex-col text-center w-full mt-4">
      <h1 class="text-6xl font-medium title-font mb-4 text-cyan-500">ABOUT</h1>
     
    </div>

<section class="text-gray-700 body-font overflow-hidden bg-white">
      <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" 
          src="{{ asset("images\home\latest (9).png") }}">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h1 class="text-6xl font-medium title-font mb-4 text-cyan-500">HOLOLIVE</h1>
            <h1 class="text-6xl font-medium title-font mb-4 text-cyan-500">Production</h1>
           
            <p class="leading-relaxed">
                  Hololive Production (Japanese: ホロライブプロダクション) (stylized in lowercase) 
                  is a virtual YouTuber agency owned by Japanese tech entertainment company Cover Corporation.
                   In addition to acting as a multi-channel network, Hololive Production also handles licensing, 
                   merchandising, music production and concert organization. As of January 2024, the agency manages 78
                    VTubers in three target languages (Japanese, Indonesian and English), totalling over 50 million subscribers,
                     including several of the most subscribed VTubers on YouTube 
                  and some of the most watched female streamers in the world.
                  <br><br>
                  The name "Hololive" was initially used for Cover's 3D stream distribution app, launched in December 2017, and later its female VTuber agency, whose first generation debuted from May to June 2018. In December 2019, Hololive was merged with Cover's male Holostars agency and INoNaKa music label under the unified "Hololive Production" brand.
            </p>
          
           
          </div>
        </div>
      </div>
    </section>

    <section class="text-blueGray-700 bg-white ">
      <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
          <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
              <h2 class="mb-8 text-3xl font-semibold tracking-widest text-cyan-500 uppercase title-font"> CEO </h2>
              <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">YAGOO</h1>
              <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">Motoaki Tanigo (born December 10, 1973), known professionally as YAGOO is a Japanese CEO of COVER Corporation.</p>
              <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">
                  Graduated from the Faculty of Science and Technology of Keio University. Afterwards did game development for Sanrio Co.
                  He was the CEO and helped develop the local news service 30min. Inc. which he sold to start a company focused on AR and VR technology in 2016 [3] He went on to found Cover Corporation in June 2016 which was first aimed at developing new content that utilizes AR/VR technology, as he believed that had lots of future business opportunities, before working in the Virtual YouTuber business.
                  He still considers Cover to be a tech company.

He says he learned a lot from the first company he started and makes sure not to repeat the same mistakes. There were some difficulties as hololive grew so suddenly and rapidly, they have to be careful with so many people streaming at once.


              </p>

          </div>  
          <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
              <img class="object-cover object-center rounded-lg " alt="hero" 
              src="{{ asset("images\home\Yagoo.png") }}">
          </div>
      </div>
  </section>

<div class="min-w-screen min-h-screen bg-cyan-500 flex items-center p-5 lg:p-10 overflow-hidden relative">
      <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
          <div class="md:flex items-center -mx-10">
              <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                  <div class="relative">
                      <img src="{{ asset("images\home\Illustrator_Artwork_-_Shirakami (1).png") }}" class="w-full relative z-10" alt="">
                      <div class="border-4 border-cyan-500 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                  </div>
              </div>
              <div class="w-full md:w-1/2 px-10">
                  <div class="mb-10">
                      <h1 class="font-bold uppercase text-6xl mb-5">Members<br>HOLOLIVE</h1>
                      <p class="text-sm">
                        The name hololive was initially used for COVER's 3D stream distribution app, launched in December 2017, and later its female VTuber agency, whose first generation debuted from May to June 2018. In December 2019, this hololive branch was merged with COVER's male HOLOSTARS agency and INoNaKa (INNK) Music label to form a unified "hololive production" brand. In 2019 and 2020, the agency debuted three overseas branches: hololive China (since disbanded), hololive Indonesia, and hololive English. In 2023, hololive debuted a new branch, hololive DEV_IS.
                        <br><br>
                              As of February 2024, there are 86 active hololive-affiliated talents with over 82 million subscribers on YouTube. Gawr Gura, a talent from its English branch, is the most subscribed VTuber worldwide with over 4 million subscribers.
                      </p>
                  </div>
                 
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
  
 



  
<div class="bg-cyan-500">
      <div class="container mx-auto px-6 py-4">
      <div class="mx-auto sm:w-6/12 lg:w-5/12 xl:w-[90%]">
          <div>
          <h1 class="text-3xl">Talents</h1>
          <p class="mt-2 text-gray-600">Members of Hololive</p>
          </div>
    
          <div class="mt-4">
          <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
              <div class="group relative flex cursor-pointer justify-between rounded-xl bg-cyan-100 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-cyan-500 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
              <div class="relative  space-y-1 p-8">
                  <h4 class="text-4xl text-amber-900">Hololive </h4>
                  <div class="relative h-6 text-amber-800 text-sm">
                  <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Members</span>
                  <a href="" class="flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                      <span>Listen now </span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                  </a>
                  </div>
              </div>
              <img class="absolute bottom-0 right-6 w-[8rem] transition duration-300 group-hover:scale-[1.4]" src="{{ asset("images\home\latest (7).png") }}" alt="" />
              </div>
          </div>
    
          <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
            <div class="group relative flex cursor-pointer justify-between rounded-xl bg-cyan-100 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-cyan-500 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
            <div class="relative  space-y-1 p-8">
                <h4 class="text-4xl text-amber-900">Hololive English</h4>
                <div class="relative h-6 text-amber-800 text-sm">
                <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Members</span>
                <a href="" class="flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                    <span>Listen now </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                </div>
            </div>
            <img class="absolute bottom-0 right-6 w-[9rem] transition duration-300 group-hover:scale-[1.4]" src="{{ asset("images\home\bbgg.png") }}" alt="" />
            </div>
        </div>
    
        <div class="relative flex flex-col justify-end overflow-hidden rounded-b-xl pt-6">
          <div class="group relative flex cursor-pointer justify-between rounded-xl bg-cyan-100 before:absolute before:inset-y-0 before:right-0 before:w-1/2 before:rounded-r-xl before:bg-gradient-to-r before:from-transparent before:to-cyan-500 before:opacity-0 before:transition before:duration-500 hover:before:opacity-100">
          <div class="relative  space-y-1 p-8">
              <h4 class="text-4xl text-amber-900">Hololive Indonesia</h4>
              <div class="relative h-6 text-amber-800 text-sm">
              <span class="transition duration-300 group-hover:invisible group-hover:opacity-0">Members</span>
              <a href="" class="flex items-center gap-3 invisible absolute left-0 top-0 translate-y-3 transition duration-300 group-hover:visible group-hover:translate-y-0">
                  <span>Listen now </span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-4 transition duration-300 group-hover:translate-x-0" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
              </a>
              </div>
          </div>
          <img class="absolute bottom-0 right-6 w-[11rem] transition duration-300 group-hover:scale-[1.4]" src="{{ asset("images\home\bg_Kobo-Kanaeru_01f.png") }}" alt="" />
          </div>
      </div>
    
     
    
          
          </div>
      </div>
      </div>
    </div>
@endsection

