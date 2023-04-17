@foreach ($categories as $category)
    <div class="mx-4 my-4">
        <a class="p border-gray-600 block rounded border p-4 font-semibold transition duration-100 ease-in-out hover:bg-cmblue hover:text-white"
            href="{{ route('category.show', $category->slug) }}">
            {{ $category->name }}
        </a>
    </div>
@endforeach
