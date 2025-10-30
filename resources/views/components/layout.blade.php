<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Developers</title>

    @vite('resources/css/app.css')
</head>
<body>

    <nav aria-label="Global" class="bg-gray-800 mx-auto flex  items-center justify-between p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <el-popover-group class="hidden lg:flex lg:gap-x-12">
            <a href="{{ route('welcome') }}" class="text-sm/6 font-semibold text-white">Home</a>
            {{-- <a href="{{route('warriors.index')}}" class="text-sm/6 font-semibold text-white" >warriors</a> --}}
            <a href="{{ route('developers.index') }}" class="text-sm/6 font-semibold text-white">Developers</a>
            <a href="{{ route('posts.index') }}" class="text-sm/6 font-semibold text-white">Posts</a>
            {{-- <a href="{{ route('comments.index') }}" class="text-sm/6 font-semibold text-white">Comments</a> --}}
            {{-- <a href="{{ route('posts.create') }}" class="text-sm/6 font-semibold text-white">Create Post</a>
            <a href="{{ route('comments.create') }}" class="text-sm/6 font-semibold text-white">Create Comment</a>
            <a href="{{ route('posts.reset') }}" class="text-sm/6 font-semibold text-white">Reset</a> --}}
        </el-popover-group>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-4">
            @if (!auth()->user())
                <a href="{{ route('auth.register') }}" class="text-sm/6 font-semibold bg-white py-2 px-4 rounded">Register</a>
                <a href="{{ route('auth.login') }}" class="text-sm/6 font-semibold text-white bg-indigo-500 py-2 px-4 rounded">Login</a>
            @endif
            
            @auth
                <p class="text-sm/6 font-semibold text-white py-2 px-4 ">Hello, {{ auth()->user()->name }}</p>
            @endauth

            @if (auth()->user())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-sm/6 font-semibold text-white bg-red-500 py-2 px-4 rounded cursor-pointer">Logout</button>
                </form>
            @endif
        </div>
    </nav>

    <main class="py-6 px-20 m-auto">
        {{ $slot }}
    </main>
</body>
</html>