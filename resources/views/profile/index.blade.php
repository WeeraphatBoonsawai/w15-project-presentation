@extends('layouts.admin')

@section('nav')
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold  hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/adminhome') }}">Home</a>
</li>
<li>
    <a class="block px-4 py-2.5 text-slate-200 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg bg-emerald-950" href="{{ url('/user') }}">Profile</a>

</li>
<li>
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" href="{{ url('/chart') }}">Dashboard</a>
</li>


<li class=" pb-2">
    <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg " href="{{ url('/members') }}">Data Base</a>
   
</li>
@endsection

@section('3')
<li class="before:mx-2">Profile</li>
@endsection



@section('Page Name')
Profile
@endsection

@section('page')

<!-- This is an example component -->

<div class="h-full">
 
    <div class="border-b-2 block md:flex mt-6">
  
      <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
        <div class="flex justify-between">
          <span class="text-xl font-semibold block">Admin Profile</span>
          <!-- This is an example component 
          <a href="{{ url('/profile.edit') }}" class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Edit</a>
        -->
        </div>
  
        <span class="text-gray-600">This information is secret so be careful</span>
        <div class="w-full p-8 mx-2 flex justify-center">
          <img id="showImage" class="max-w-xs w-64 items-center border" src="https://media.tenor.com/uttqSPmjXOMAAAAj/bird-wiggle-mumei.gif" alt="">                          
          </div>
      </div>
      
      <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
        <div class="rounded  shadow p-6">
          <div class="pb-6">
            <label for="name" class="font-semibold text-gray-700 block pb-1">Name</label>
            <div class="flex">
              <input disabled id="username" class="border-1  rounded-r px-4 py-2 w-full" type="text" value="{{ Auth::user()->name }}" />
            </div>
          </div>
          <div class="pb-4">
            <label for="about" class="font-semibold text-gray-700 block pb-1">Email</label>
            <input disabled id="email" class="border-1  rounded-r px-4 py-2 w-full" type="email" value="{{ Auth::user()->email }}" />
            <span class="text-gray-600 pt-4 block opacity-70">Personal login information of your account</span>
          </div>
        </div>
      </div>
  
    </div>
   
  </div>

@endsection
