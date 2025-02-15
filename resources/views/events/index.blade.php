@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100 text-center px-6">
        <h1 class="text-6xl uppercase text-[#0A192F] font-extrabold tracking-wide drop-shadow-lg">
            Events Page
        </h1>
        <p class="text-xl text-gray-700 mt-6 max-w-3xl leading-relaxed">
            Discover and participate in exciting events! Stay updated on upcoming schedules, join activities, and engage with the community.
            If you're an admin, manage events seamlessly by adding, editing, or overseeing registrations.
        </p>
        <div class="mt-6 flex space-x-4 mb-20">
            @can('manage-events')
                <h1 class="px-6 py-3 bg-[#00B4D8] text-white font-semibold rounded-md shadow-md hover:bg-[#0095B6] transition duration-300">
                    Add Event
                </h1>
            @endcan
            <h1 class="px-6 py-3 bg-[#0A192F] text-white font-semibold rounded-md shadow-md hover:bg-[#05142D] transition duration-300">
                View Events
            </h1>
        </div>
    </div>
@endsection
