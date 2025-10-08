<x-layout>
    <div class="flex flex-wrap gap-6 justify-center">
        @foreach ($warriors as $warrior)
            <h2>{{$warrior->name}}</h2>
        @endforeach
    </div>

    {{ $warriors->links() }}


</x-layout>