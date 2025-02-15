<nav class="bg-[#0A192F] flex justify-between items-center px-8 py-4 shadow-lg text-white">
    <!-- Logo & Brand Name -->
    <div class="flex items-center space-x-4">
        <h1 class="text-2xl font-bold text-[#00B4D8] tracking-wide">
        <a href="{{ route('welcome') }}">Spatie</h1></a>
    </div>

    <!-- Navigation Links -->
    <div class="flex items-center space-x-6">
        <a class="px-4 py-2 rounded-md hover:bg-[#00B4D8] hover:text-[#0A192F] transition duration-300 font-medium" href="/">Home</a>
        <a class="px-4 py-2 rounded-md hover:bg-[#00B4D8] hover:text-[#0A192F] transition duration-300 font-medium" href="{{ route('events') }}">Events</a>

        @can('manage-transactions')
        <a class="px-4 py-2 rounded-md hover:bg-[#00B4D8] hover:text-[#0A192F] transition duration-300 font-medium" href="{{ route('transaction') }}">Transactions</a>
        @endcan

        @if (auth()->check())
            <a class="px-4 py-2 rounded-md hover:bg-[#00B4D8] hover:text-[#0A192F] transition duration-300 font-medium" href="{{ route('profile') }}">Profile</a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 rounded-md bg-red-500 hover:bg-red-600 transition duration-300 font-medium text-[#0A192F] hover:text-white">
                    Logout
                </button>
            </form>
        @else
            <a class="px-4 py-2 text-[#0A192F] rounded-md bg-[#00B4D8] hover:bg-[#0cc3e7] hover:text-white transition duration-300 font-medium" href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
