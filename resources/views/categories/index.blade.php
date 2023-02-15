<x-app-layout>
    <x-slot name="header">
        Categories
    </x-slot>

    <div>
        <h1>Categories</h1>
        <ul>
            @foreach ($categories as $category )
                <li> {{ $category->name }} </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
