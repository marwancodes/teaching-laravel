<x-layout>
    <h1 class="bg-[#6366f1] text-white font-semibold px-5 mb-5">Comments -exploring (Testing)</h1>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($comments as $comment)
            <a href="{{ route('posts.show', $comment->post->id) }}" class="block h-40 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-800">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#6366f1] dark:text-[#6366f1]">
                    {{ $comment->author }}
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    {{ $comment->body }}
                </p>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Post title: {{ $comment->post->title }}
                </p>
            </a>
        @endforeach
    </div>

</x-layout>
