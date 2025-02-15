@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100 text-center px-6">
        <h1 class="text-6xl uppercase text-[#0A192F] font-extrabold tracking-wide drop-shadow-lg">
            Admin Transactions
        </h1>
        <p class="text-xl text-gray-700 mt-6 max-w-3xl leading-relaxed">
            As an administrator, you have full control over managing transactions.
            View, track, and process payments efficiently, ensuring seamless financial operations.
        </p>

        <h1 class="mt-8 px-6 py-3 bg-[#00B4D8] text-white text-lg font-semibold rounded-lg shadow-md
                  hover:bg-[#0cc3e7] transition duration-300 mb-20">
            Manage Transactions
        </h1>
    </div>
@endsection
