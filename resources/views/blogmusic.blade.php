@extends('layouts.app')

@section('nav')
<a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/home') }}">HOME</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/about') }}">ABOUT</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/views') }}">TALENTS</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-sky-500 rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/blogmusic') }}">MUSIC</a>
@endsection

@section('content')

<form action="{{ url('/blogmusic') }}" method="get"
class=" md:flex-row gap-3 flex justify-end mr-12 mt-12" >
  <div class="flex">
      <input type="search" name="search"  placeholder="Search for the tool you like"
    class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-cyan-500 focus:outline-none focus:border-cyan-500"
    >
      <button type="submit" class="bg-cyan-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
  </div>
 
</form>

<section class="mx-12 py-9">
    <main class="grid place-items-center bg-gradient-to-t">
        <div>
          
          <section class="grid grid-cols-1 sm:grid-cols-5 gap-4">

            @foreach ($blogs as $item)
            <!-- CARD 1 -->
            <div class="bg-cyan-500 shadow-lg rounded p-3">
              <div class="group relative">
                <img class="w-full md:w-72 block rounded" 
                src="{{ $item->music_img}}" alt="" />
                <div class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">
                 
                  <a href="{{ $item->music_link}}">
                  <button class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                    </svg>
                  </button>
                </a>
                 
                </div>
              </div>
              <div class="p-5">
                <h3 class="text-white text-lg">{{ $item->music_name }}</h3>
                <p class="text-gray-800">{{ $item->ch }}</p>
              </div>
            </div>
            <!-- END OF CARD 1 -->
            @endforeach 
          </div>
        </section>
        </main>
    </section>
@endsection


