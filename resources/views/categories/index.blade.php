<x-app-layout :title="$title">

    <h1>Categories</h1>

    @foreach ($categories as $category)
        <h1>{{ $category->id }}</h1>
        <br>
        <h2>{{ $category->name }}</h2>
    @endforeach
</x-app-layout>
