@extends('layouts/app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container my-14 mx-auto relative min-h-screen text-center">
        <p class="pt-5 mb-8 text-6xl">Welcome</p>
        @if (Route::has('login'))
            <div class="container text-center mt-5">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-2xl text-blue-500 font-semibold hover:text-blue-700 py-2 px-4 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-2xl text-blue-500 font-semibold hover:text-blue-700 py-2 px-4 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-2xl text-blue-500 font-semibold hover:text-blue-700 py-2 px-4 underline">Register</a>
                @endif
                @endauth
            </div>
        @endif
    </div>
@endsection

