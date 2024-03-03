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
  <a class="block px-4 py-2.5 text-slate-200 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg bg-emerald-950" href="#">Data Base</a>
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
<li class="before:mx-2">Affiliation</li>
@endsection



@section('Page Name')
Affiliation
@endsection

@section('page')

<form action="{{ url('/affiliation') }}" method="get"
class="flex flex-col md:flex-row gap-3 mt-6">
  <div class="flex">
      <input type="search" name="search" placeholder="Search for the tool you like"
    class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-cyan-500 focus:outline-none focus:border-cyan-500"
    >
      <button type="submit" class="bg-cyan-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
  </div>
 
</form>

@if ($message = Session::get('success'))

<div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">{{ $message }}</span>
  </div>
</div>

@endif

<a href="{{ route('affiliation.create') }}"><button type="button" class=" mt-6 text-white bg-cyan-500 hover:bg-cyan-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-cyan-500 dark:hover:bg-cyan-600 focus:outline-none dark:focus:ring-cyan-600">ADD AFFILIATION</button></a>




  <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
      <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50 ">
          <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">S.NO</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name Affiliation</th>
            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">

          @foreach ($affiliations as $item)

          

          <tr class="hover:bg-gray-50">

              <td class="px-6 py-4">
                  <div class="font-medium text-gray-700">{{ $item->id }}</div>
                </td>

           
            <td class="px-6 py-4">
              <div class="font-medium text-gray-400">{{ $item->affiliation_name}}</div>
            </td>
           
            <td class="pX-4 py-4">
              
              <form action="{{ route('affiliation.destroy',$item->id) }}" method="Post">
                <a href="{{ route('affiliation.edit',$item->id) }}">
                  
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
              </a>
                
                @csrf
                @method('DELETE')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
            </form>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>

      </div>
      <div class="ml-6 mr-6">{!! $affiliations->links() !!}</div>


@endsection

