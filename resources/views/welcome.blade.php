@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100 text-center px-6">
        <h1 class="text-6xl uppercase text-[#0A192F] font-extrabold tracking-wide drop-shadow-lg">
            Welcome to <span class="text-[#00B4D8]">Spatie</span>
        </h1>
        <p class="text-xl text-gray-700 mt-6 max-w-3xl leading-relaxed">
            Spatie is your go-to platform for managing transactions, events, and more with ease.
            Designed for efficiency and simplicity, we provide seamless solutions to help you
            stay organized and productive.
        </p>
        <a href="{{ route('events') }}"
           class="mt-8 mb-20 px-6 py-3 bg-[#00B4D8] text-white text-lg font-semibold rounded-lg shadow-md
                  hover:bg-[#0cc3e7] transition duration-300">
            Explore Events
        </a>
    </div>
@endsection
