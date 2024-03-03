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
<li class="before:mx-2">Talent</li>
@endsection



@section('Page Name')
Add Talent
@endsection

@section('page')

  
  <br>
  @if(session('status'))
  <div class="alert alert-success mb-1 mt-1">
  {{ session('status') }}
  </div>
  @endif
  
  <section class="max-w-svh p-6 mx-auto bg-white rounded-md dark:bg-white mt-2">
  <h1 class="text-xl font-bold text-black capitalize dark:text-black">TALENT</h1>
  <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3 ">
      <div class="form-group">
          <label class="text-black dark:text-black">Name</label>
          <input type="text" name="members_name" placeholder="members_name"
          class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          @error('members_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
      </div>
  
   
  
      <div class="form-group">
          <label class="text-black dark:text-black">Nickname</label>
          <input type="text" name="members_nickname" placeholder="members_nickname"
          class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          @error('members_nickname')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
    </div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Greet</label>
        <input type="text" name="members_greet" placeholder="members_greet"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_greet')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
      </div>
  
      
  
      <div class="form-group">
        <label class="text-black dark:text-black">Debutdate</label>
        <input type="text" name="members_debutdate" placeholder="members_debutdate"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_debutdate')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Illustrator</label>
        <input type="text" name="members_name_Illustrator" placeholder="members_name_Illustrator"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_name_Illustrator')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Youtube Name</label>
        <input type="text" name="members_youtube_name" placeholder="members_youtube_name"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_youtube_name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
      <h1 class="text-xl font-bold text-black capitalize dark:text-black mt-4">DETAIL</h1>
      <div></div>
      <div></div>
  
      <div class="form-group">
        <label class="text-black dark:text-black" for="members_title">Title</label>
        <textarea type="textarea" name="members_title" placeholder="members_title"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
        @error('members_title')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
    <div class="form-group">
        <label class="text-black dark:text-black" for="members_profile">Profile</label>
        <textarea type="textarea" name="members_profile" placeholder="members_profile"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
        @error('members_profile')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
      </div>
  
      <div class="form-group"> 
        <label class="text-black dark:text-black" for="members_personality">Personality</label>
        <textarea type="textarea" name="members_personality" placeholder="members_personality"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
        @error('members_personality')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
    
  
  
  
  <h1 class="text-xl font-bold text-black capitalize dark:text-black mt-4">SELECT</h1>
      <div></div>
      <div></div>
  
  <div class="form-group">
  <label class="text-black dark:text-black">Generation</label>
  <select name="generation_id" id="generation_id" 
  class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
  @foreach ($generations as $key => $value)
  <option value="{{$key}}">
      {{$value}}
  </option>
  @endforeach
  
  </select>
  @error('generation_id')
  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
  </div>
  
  <div class="form-group">
  <label class="text-black dark:text-black">Affiliation</label>
  <select name="affiliation_id" id="affiliation_id"
  class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
    @foreach ($affilitions as $key => $value)
    <option value="{{$key}}">
        {{$value}}
    </option>
    @endforeach
    
  
  </select>
  @error('affiliation_id')
  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
  </div>
  
  
  
      <div class="form-group">
          <label class="text-black dark:text-black">Gender</label>
          <select name="gender_id" id="gender_id"
          class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            @foreach ($genders as $key => $value)
            <option value="{{$key}}">
                {{$value}}
            </option>
            @endforeach
          </select>
      </div>
      @error('gender_id')
  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
  
      <h1 class="text-xl font-bold text-black capitalize dark:text-black mt-4">LINK</h1>
      <div></div>
      <div></div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Introduction Video Link</label>
        <input type="text" name="members_introduction_video" placeholder="members_introduction_video"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_introduction_video')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Youtube Link</label>
        <input type="text" name="members_youtube" placeholder="members_youtube"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_youtube')
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
  
      
      <h1 class="text-xl font-bold text-black capitalize dark:text-black mt-4">Image</h1>
      <div></div>
      <div></div>
  
  
      <div class="form-group">
        <label class="text-black dark:text-black">Icon</label>
        <input type="file" name="members_img_icon" placeholder="members_img_icon"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_img_icon')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
    <div class="form-group">
      <label class="text-black dark:text-black">Costume 1</label>
      <input type="file" name="members_img_costume" placeholder="members_img_costume"
      class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
      @error('members_img_costume')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
  </div>
  
  
      <div class="form-group">
        <label class="text-black dark:text-black">Costume 2</label>
        <input type="file" name="members_img_costume2" placeholder="members_img_costume2"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_img_costume2')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Artwork</label>
        <input type="file" name="members_img_artwork" placeholder="members_img_artwork"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_img_artwork')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
      <div class="form-group">
        <label class="text-black dark:text-black">Concept</label>
        <input type="file" name="members_img_concept" placeholder="members_img_concept"
        class="form-control block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @error('members_img_concept')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
  
   
  
  
     
      
  
  <div class="flex justify-end mt-6">
      <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">submit</button>
  </div>
  </form>
  </section>

@endsection









