<x-layout>
    <h2 class="mb-10">Show Page</h2>

    <div class="mb-5">
        <p class="text-xl text-purple-700 font-bold">ID: {{ $developer->id }}</p>
        <p class="text-xl font-bold">{{ $developer->name }}</p>
        <p class="text-xl font-bold">Email: {{ $developer->email }}</p>
        <p class="text-xl font-bold">Age: {{ $developer->age }}</p>
        <p class="text-xl font-bold">Age: {{ $developer->stack }}</p>
    </div>

    <a href="{{ route('developers.delete', $developer->id) }}" class="py-3 px-5 text-white bg-rose-600 font-bold rounded-xl">
        Delete
    </a>
    <a href="{{ route('developers.update', $developer->id) }}" class="py-3 px-5 text-white bg-green-600 font-bold rounded-xl ml-3">
        Update
    </a>
    <a href="{{ route('developers.index') }}" class="py-3 px-5 text-white bg-blue-600 font-bold rounded-xl ml-3">
        Back
    </a>

</x-layout>
