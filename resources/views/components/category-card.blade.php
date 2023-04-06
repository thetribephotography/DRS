@foreach ($categories as $category)
    <div class="mx-4 my-4">
        <a class="p block rounded border border-gray-600 p-4 font-semibold transition duration-100 ease-in-out hover:bg-cmblue hover:text-white"
            href="/categories/{{ $category->slug }}">
            {{ $category->name }}
        </a>
    </div>
@endforeach
