<x-layout>
    <div class="bg-gray-800/60 py-20 text-white p-6 rounded-lg text-center">
    <h1 class="text-3xl font-bold mb-4">Welcome to Our Application</h1>
    <p class="mb-10">This is the welcome page.</p>

    {{-- Login & Register --}}
    <a href="{{ route('auth.login') }}" class="py-3 px-5 bg-indigo-500 text-white rounded-lg mr-4">Login</a>
    <a href="{{ route('auth.register') }}" class="py-3 px-5 bg-white text-gray-800 rounded-lg">Register</a>
    </div>
</x-layout>