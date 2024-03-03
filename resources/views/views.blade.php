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

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-6xl font-medium title-font mb-4 text-cyan-500">HOLOLIVE</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-slate-500">
          Debuting in September 2020, Hololive English was Cover’s first serious 
          attempt to branch out its brand to a Western audience. These talents
           primarily produce content for an 
          English-speaking audience, but still regularly collaborate 
          with members from other branches.
        </p>
      </div>

      
      <form action="{{ url('/views') }}" method="get"
      class=" md:flex-row gap-3 flex justify-end" >
      <select id="pricingType" name="pricingType" 
      class="w-full h-10 border-2 border-cyan-500 focus:outline-none focus:border-cyan-500 text-cyan-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
      <option value="All" selected="">All</option>
      @foreach ($affilitions as $key => $value)
    <option value="{{$key}}">
        {{$value}}
    </option>
    @endforeach
    
    </select>
        <div class="flex">
            <input type="search" name="search"  placeholder="Search for the tool you like"
          class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-cyan-500 focus:outline-none focus:border-cyan-500"
          >
            <button type="submit" class="bg-cyan-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
        </div>
       
      </form>

  <div class="p-1 flex flex-wrap items-center justify-center">


      @foreach ($blogs as $item)
    <a href="/detail/{{$item->ch}}">
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-cyan-500 rounded-lg max-w-xs shadow-lg group">
          
          <div class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
              
              <img class="relative w-40" src="{{ asset('images/Portrait/'.$item->members_img_icon) }}" alt="">
              
          </div>
          <div class="relative text-white px-6 pb-6 mt-6 text-center">
              <span class="block opacity-75 -mb-1">{{ $item->members_name }}</span>
              <div class="flex justify-center ">
                  <span class="block font-semibold text-12">{{ $item->affiliation->affiliation_name }}</span>
                  
                </div>
          </div>
      </div>
    
      @endforeach
                               
    </div>
  </div>
</section>
@endsection


