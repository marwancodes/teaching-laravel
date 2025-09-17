<x-layout>
    <h1 class="bg-[#6366f1] text-white font-semibold px-5 mb-5">Tags</h1>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($tags as $tag)
            <div class="block h-50 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-800">
                <h5 class="mb-5 text-2xl font-bold tracking-tight text-[#6366f1] dark:text-[#6366f1]">
                    {{ $tag->title }}
                </h5>
                <a href="{{ route('tags.delete', $tag->id) }}" class="text-white py-3 px-5 bg-rose-500 hover:bg-rose-600 rounded-lg">Delete</a>
            </div>
        @endforeach
    </div>

</x-layout>
