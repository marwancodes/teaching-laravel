<x-layout>

    <div class="text-center">
        
        <div class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 dark:border-gray-700 mx-auto">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-[#6366f1]">
                {{ $post->title }}
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Media: {{ $post->media }}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $post->content }}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400 mb-10">
                Author: {{ $post->author }}
            </p>
            <a href="{{ route('posts.delete', $post->id) }}" class="text-white py-3 px-5 bg-rose-500 hover:bg-rose-600 rounded-lg">Delete</a>
            <a href="{{ route('posts.update', $post->id) }}" class="text-white py-3 px-5 bg-green-500 hover:bg-green-600 rounded-lg">Update</a>
            <a href="{{ route('posts.index') }}" class="text-white py-3 px-5 bg-purple-600 hover:bg-purple-700 rounded-lg">All Posts</a>
        </div>

    </div>

</x-layout>
