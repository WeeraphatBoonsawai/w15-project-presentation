@extends('layouts.admin')


@section('nav')
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/adminhome') }}">Home</a>
</li>
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/user') }}">Profile</a>

</li>
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/chart') }}">Dashboard</a>
</li>


<li class="bg-slate-50 pb-2 rounded-lg border">
  <a class="block px-4 py-2.5 text-slate-200 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg bg-emerald-950" href="{{ url('/members') }}">Data Base</a>
  <ol class="text-sm text-slate-700 space-y-4 pl-6 my-2.5">
      <li>
          <a class="block text-slate-500 hover:text-slate-950" href="{{ url('/members') }}">Talent</a>
      </li>
      <li>
          <a class="block text-slate-500 hover:text-slate-950" href="{{ url('/music') }}">Music</a>
      </li>
      <li>
          <a class="block text-slate-500 hover:text-slate-950" href="{{ url('/generation') }}">Generation</a>
      </li>
      <li>
          <a class="block text-slate-500 hover:text-slate-950" href="{{ url('/affiliation') }}">Affiliation</a>
      </li>
  </ol>
</li>
@endsection


@section('3')
<li class="before:mx-2">Add MUSIC</li>
@endsection



@section('Page Name')
Add MUSIC
@endsection

@section('page')


<br>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif

<section class="max-w-svh p-6 mx-auto bg-white rounded-md dark:bg-white mt-2">
<h1 class="text-xl font-bold text-black capitalize dark:text-black">MUSIC</h1>
<form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3 ">
    <div class="form-group">
        <label class="text-black dark:text-black">Name</label>
        <input type="text" name="music_name" placeholder="music_name"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('music_name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
    </div>

    

        <div class="form-group">
            <label class="text-black dark:text-black">Link</label>
            <input type="text" name="music_link" placeholder="music_link"
            class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            @error('music_link')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
      </div>

      <div class="form-group">
        <label class="text-black dark:text-black">talents</label>
        <input type="text" name="ch" placeholder="ch"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('ch')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
  </div>
      

      <div class="form-group">
        <label class="text-black dark:text-black">image</label>
        <input type="text" name="music_img" placeholder="music_img"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('music_img')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
  </div>

 
 

<div class="flex justify-end mt-6">
    <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">submit</button>
</div>
</form>
</section>
@endsection











