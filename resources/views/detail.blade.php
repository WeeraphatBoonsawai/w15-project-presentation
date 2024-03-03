@extends('layouts.app')

@section('nav')
<a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/home') }}">HOME</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/about') }}">ABOUT</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-sky-500 rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/views') }}">TALENTS</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/blogmusic') }}">MUSIC</a>
@endsection

@section('content')
<div class="px-32 mt-6">
  <span class="text-gray-500"><a href="{{ url('/home') }}">HOME --></a></span>
  <span class="text-gray-500"><a href="{{ url('/views') }}">TALENTS --></a></span>
  <span class="ml-auto text-gray-900"><a href="">{{$blog->members_name}}</a></span>
</div>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-2 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
 

      <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
        <h2 class="text-lg title-font text-cyan-500 tracking-widest">Member</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">
          {{$blog->members_name}}
          <br>
          <span class="text-gray-500">{{$blog->members_greet}}</span>
        </h1>
        <p class="leading-relaxed mb-4">{{$blog->members_title}}</p>
        <div class="flex mb-4">
          <a class="flex-grow text-cyan-500 border-b-2 border-cyan-500 py-2 text-2xl px-1">Profile</a>
        </div>
        <p class="leading-relaxed mb-4">{{$blog->members_profile}}</p>
        <div class="flex mb-4">
          <a class="flex-grow text-cyan-500 border-b-2 border-cyan-500 py-2 text-2xl px-1">Detail</a>
        </div>

        <div class="flex py-2">
          <span class="text-gray-500">Nickname</span>
          <span class="ml-auto text-gray-900">{{$blog->members_nickname}}</span>
        </div>
        
        
        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Gender</span>
          <span class="ml-auto text-gray-900">{{$blog->gender->gender_name}}</span>
        </div>

        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Affiliation</span>
          <span class="ml-auto text-gray-900">{{$blog->affiliation->affiliation_name}}</span>
        </div>

        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Generation</span>
          <span class="ml-auto text-gray-900">{{$blog->generation->generation_name}}</span>
        </div>

        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Youtube</span>
          <span class="ml-auto text-sky-400"><a href="{{$blog->members_youtube}}">{{$blog->members_youtube_name}}</a></span>
        </div>

        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Illustrator</span>
          <span class="ml-auto text-gray-900">{{$blog->members_name_Illustrator}}</span>
        </div>

        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
          <span class="text-gray-500">Debutdate</span>
          <span class="ml-auto text-gray-900">{{$blog->members_debutdate}}</span>
        </div>

      </div>

      <img alt="members_img_costume" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/Costumes/'.$blog->members_img_costume) }}">
    </div>
  </div>


</section>

<section>
  <div class="container px-24 py-2 mx-auto">
  <div class="flex flex-col">
    <div class="h-1 bg-gray-200 rounded overflow-hidden">
      <div class="w-FULL h-full bg-cyan-500"></div>
    </div>
    <div class="flex flex-wrap sm:flex-row flex-col  mb-2">
      <h1 class="sm:w-2/5 text-cyan-500 font-medium title-font text-2xl ">Profile</h1>
    </div>
  </div>

    <p class="leading-relaxed ml-6 mr-6 mt-6">{{$blog->members_profile}}</p>

</div>
</section>


<section>
  <div class="container px-24 py-24 mx-auto">
  <div class="flex flex-col">
    <div class="h-1 bg-gray-200 rounded overflow-hidden">
      <div class="w-FULL h-full bg-cyan-500"></div>
    </div>
    <div class="flex flex-wrap sm:flex-row flex-col  mb-4">
      <h1 class="sm:w-2/5 text-cyan-500 font-medium title-font text-2xl ">Introduction Video</h1>
    </div>
  </div>
  <center>
  <iframe width="1260" height="720" src="{{$blog->members_introduction_video}}"  allowfullscreen></iframe>
</center>
</div>
</section>

<section>
  <div class="container px-24 py-2 mx-auto">
  <div class="flex flex-col">
    <div class="h-1 bg-gray-200 rounded overflow-hidden">
      <div class="w-FULL h-full bg-cyan-500"></div>
    </div>
    <div class="flex flex-wrap sm:flex-row flex-col  mb-2">
      <h1 class="sm:w-2/5 text-cyan-500 font-medium title-font text-2xl ">Music</h1>
    </div>
  </div>

  <main class="grid place-items-center bg-gradient-to-t">
    <div>
      
      <section class="grid grid-cols-1 sm:grid-cols-5 gap-4 mt-6 mx-8">
        @foreach ($musics as $music)
        <!-- CARD 1 -->
        <div class="bg-cyan-500 shadow-lg rounded p-3">
          <div class="group relative">
            <img class="w-full md:w-72 block rounded" 
            src="{{$music->music_img}}" alt="" />
            <div class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">
             
              <a href="{{$music->music_link}}">
              <button class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                </svg>
              </button>
            </a>
             
            </div>
          </div>
          <div class="p-5">
            <h3 class="text-white text-lg">{{$music->music_name}}</h3>
            <p>{{$music->ch}}</p>
          </div>
        </div>
        <!-- END OF CARD 1 -->
        @endforeach
      </div>
    </section>
    </main>



</section>

<section class="text-gray-600 body-font">
  <div class="container px-24 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-FULL h-full bg-cyan-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col  mb-12">
        <h1 class="sm:w-2/5 text-cyan-500 font-medium title-font text-2xl mb-2 sm:mb-0">Art</h1>
      </div>
      
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-svh overflow-hidden">
          <img alt="costume" class="object-contain object-center h-full w-full" src="{{ asset('images/Costumes/'.$blog->members_img_costume) }}">
        </div>

      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-svh overflow-hidden">
        <img alt="Costumes2" class="object-contain object-center h-full w-full" src="{{ asset('images/Costumes2/'.$blog->members_img_costume2) }}">
        </div>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-svh overflow-hidden">
        <img alt="artwork" class="object-contain object-center h-full w-full" src="{{ asset('images/artwork/'.$blog->members_img_artwork) }}">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-6">
  <div class="container px-24 py-2 mx-auto">
  <div class="flex flex-col">
    <div class="h-1 bg-gray-200 rounded overflow-hidden">
      <div class="w-FULL h-full bg-cyan-500"></div>
    </div>
    <div class="flex flex-wrap sm:flex-row flex-col  mb-2">
      <h1 class="sm:w-2/5 text-cyan-500 font-medium title-font text-2xl ">Concept</h1>
    </div>
  </div>
<center>
  <img class="h-svh w-max rounded-lg "  src="{{ asset('images/concept/'.$blog->members_img_concept) }}" alt="concept">
</center>
</div>
</section>
@endsection






