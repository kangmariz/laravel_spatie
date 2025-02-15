@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mb-20">
            <h2 class="text-3xl font-extrabold text-gray-800 text-center">Welcome Back</h2>
            <p class="text-gray-600 text-center mt-2">Log in to your account</p>

            @if (session('error'))
                <div class="mt-4 text-red-600 bg-red-100 p-2 rounded-md text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('signin') }}" method="POST" class="mt-6 space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B4D8] focus:border-blue-500 outline-none">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B4D8] focus:border-blue-500 outline-none">
                </div>

                <button type="submit"
                    class="w-full bg-[#00B4D8] hover:bg-[#0cc3e7] text-white font-bold py-3 rounded-lg transition duration-300 shadow-md">
                    Log in
                </button>
            </form>
        </div>
    </div>
@endsection
