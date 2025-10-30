<x-layout>
    <div class="mb-5 flex justify-between items-center">
        @auth
        <p>User: {{ Auth::user()->email }}</p>
        @endauth
        <h1 class="bg-[#6366f1] text-white font-semibold px-5">Developers Page</h1>
        <a href="{{ route('developers.create') }}" class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white rounded-lg">
            Add new developer
        </a>
    </div>

    <div class="flex flex-wrap gap-6 justify-center">
        @foreach ($developers as $developer)
            <a href="{{ route('developers.show', $developer->id) }}">
                <div class="relative flex flex-col my-6 bg-gray-900 hover:bg-gray-800 shadow-sm border border-slate-200 rounded-lg w-96">
                    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                        <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-400 text-xl font-semibold">
                            {{ $developer->name }}
                        </h6>
                    </div>
                    <div class="px-4 pb-4 pt-0 mt-2">
                        <button class="rounded-md bg-[#6366f1] py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                        Stack: {{ $developer['stack'] }}
                        </button>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    
    {{ $developers->links() }}


</x-layout>