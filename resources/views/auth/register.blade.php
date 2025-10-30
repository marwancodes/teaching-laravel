<x-layout>
    <h2 class="mb-10 text-center font-bold text-2xl text-indigo-500">Register Page</h2>

    <div class="mb-10 flex flex-col gap-5 justify-center items-center">

        <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-5 w-1/3 mx-auto">
            @csrf
            
            <input type="name" name="name" placeholder="Name" class="border border-gray-300 rounded-lg p-3">
            <input type="email" name="email" placeholder="Email" class="border border-gray-300 rounded-lg p-3">
            <input type="password" name="password" placeholder="Password" class="border border-gray-300 rounded-lg p-3">
            <input type="password" name="password_confirmation" placeholder="Password" class="border border-gray-300 rounded-lg p-3">

            <button type="submit" class="py-3 px-5 text-white bg-indigo-500 hover:bg-indigo-600 font-bold rounded-xl cursor-pointer">
                Register
            </button>
        </form>

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
