<x-layout>
    <h2 class="mb-10 text-center font-bold text-2xl text-indigo-500">Create Developer</h2>

    <div class="mb-10 flex flex-col gap-5 justify-center items-center">
        <form action="{{ route('developers.store') }}" method="POST" class="flex flex-col gap-5 w-1/3 mx-auto">
            @csrf
            
            <input type="text" name="name" placeholder="Name" class="border border-gray-300 rounded-lg p-3">
            <input type="number" name="age" placeholder="Age" class="border border-gray-300 rounded-lg p-3">
            <input type="email" name="email" placeholder="Email" class="border border-gray-300 rounded-lg p-3">
            <input type="text" name="stack" placeholder="Stack" class="border border-gray-300 rounded-lg p-3">
            
            <button type="submit" class="py-3 px-5 text-white bg-indigo-500 hover:bg-indigo-600 font-bold rounded-xl cursor-pointer">
                Create Developer
            </button>
        </form>
        
        <a href="{{ route('developers.index') }}" class=" text-center py-3 px-5 w-1/4 font-bold rounded-xl cursor-pointer">
            Cancel
        </a>

        <div>
            @if ($errors->any())
                <div class="mb-5 p-4 bg-red-100 text-red-700 rounded-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>



</x-layout>
