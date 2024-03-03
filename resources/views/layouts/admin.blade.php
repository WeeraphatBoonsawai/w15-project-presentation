<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - Hololive</title>

    <!-- Fonts -->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!-- component -->
<div id="body" class="bg-slate-50 h-screen flex">
    <nav class="bg-white w-80 h-screen flex flex-col gap-10 border-r border-slate-100">
        <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center text-cyan-500">Hololive</div>
        <div class="user flex items-center justify-center flex-col gap-4 border-b border-emerald-slate-50 py-4">
            <img class="w-24 rounded-full shadow-xl" src="https://media.tenor.com/uttqSPmjXOMAAAAj/bird-wiggle-mumei.gif">
            <div class="flex flex-col items-center">
                <span class="font-semibold text-lg text-emerald-700">{{ Auth::user()->name }}</span>
                <span class="text-slate-400 text-sm">Admin</span>
            </div>
            <div class="text-sm text-slate-400">
                <span class="font-semibold text-slate-500">{{ Auth::user()->email  }}</span>
            </div>
        </div>

        <ul class="px-6 space-y-2">

            @yield('nav')

            <li>
                <a class="block px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-950 hover:text-white rounded-lg" 
                href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> 
                    {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
        </ul>
    </nav>
    <div class="right w-full flex gap-2 flex-col">
        <header class="h-16 w-full flex items-center p-4 text-slate-400">
            <ol class=" text-slate-400 flex flex-wrap gap-1 text-sm [&>li:last-child]:font-semibold [&>li:not(:first-child)]:before:content-['\00bb']">
                <li class="before:content-['\2616'] before:mx-2"><a href="{{ url('/home') }}">Homepage</a></li>
                <li class="before:mx-2"><a href="#">Data Base</a></li>
                @yield('3')
                
            </ol>
        </header>

        <div class="p-4">
            <h1 class="text-xl font-semibold text-slate-500 page-title">@yield('Page Name')</h1>
            @yield('page')
        </div>
    </div>
<div>
    
</body>
</html>
