@foreach ($categories as $category)
    <div class="mx-4 my-4">
        <a class="p block rounded border border-gray-600 p-4 font-semibold hover:border-cmblue hover:text-cmblue"
            href="/categories/{{ $category->slug }}">
            {{ $category->name }}
        </a>
    </div>
@endforeach
