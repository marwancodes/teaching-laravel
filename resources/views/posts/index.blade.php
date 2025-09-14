<x-layout>
    <h1 class="bg-[#6366f1] text-white font-semibold px-5 mb-5">Posts</h1>

    <div class="grid grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="block h-50 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-800">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#6366f1] dark:text-[#6366f1]">
                    {{ $post->title }}
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    {{ $post->content }}
                </p>
                @foreach ($post->comments as $comment)
                    <p class="py-3 px-2 rounded-lg font-normal text-gray-700 dark:text-gray-400 dark:bg-gray-800">
                        <span class="text-green-500">Comment by</span> {{ $comment->author }}: {{ $comment->body }}
                    </p>
                @endforeach
            </a>
        @endforeach
    </div>

</x-layout>
