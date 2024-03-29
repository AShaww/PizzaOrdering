@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
    <div class="content">
        <img src="/img/newLogo.png" alt="Pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizza  <!-- title of the project -->
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="{{ route('pizzas.index') }}"> Order a Pizza!</a>   //using named routes to find and use routes
    </div>

@endsection
