@extends('layouts.app')

@section('nav')
<a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/home') }}">HOME</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/about') }}">ABOUT</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/views') }}">TALENTS</a>
            
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-sky-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" 
            href="{{ url('/blogmusic') }}">MUSIC</a>
@endsection

@section('content')
 <!-- component -->
 <div class="bg-white dark:bg-gray-900 mb-6">
    <div class="flex justify-center h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://media1.tenor.com/m/DkqIfxH2jr8AAAAd/fubuki-confused.gif)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
               
            </div>
        </div>
        
        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center">
                    <center>
                        <img src="{{ asset("images\home\Hololive_Production_logo.png") }}" class="w-96"></center>
                    
                    
                </div>

                <div class="mt-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mt-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                            <input id="name" type="text" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            class="form-control @error('name') is-invalid @enderror block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                            <input placeholder="Your Email Address" id="email" type="email"name="email" value="{{ old('email') }}" required autocomplete="email"
                            class="form-control @error('email') is-invalid @enderror block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                            </div>

                            <input id="password" type="password" placeholder="Your Password" name="password" required autocomplete="new-password"
                            class="form-control @error('password') is-invalid @enderror block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password-confirm" class="text-sm text-gray-600 dark:text-gray-200">Password Confirm</label>
                            </div>

                            <input placeholder="Your Password Confirm" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                            class="form-control block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-cyan-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Register
                            </button>
                        </div>

                    </form>
                    <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="{{ route('login') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>

                   
                </div>
            </div>
        </div>
    </div>
</div>









@endsection
