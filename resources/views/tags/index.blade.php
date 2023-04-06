<x-app-layout>
    <h1>Tags</h1>


    @foreach ($tags as $tag)
        <h3>{{ $tag->name }}</h3>
        <p>{{ $tag->_id }}</p>
    @endforeach
</x-app-layout>
