<x-app-layout :title="$title">

    {{-- Header start --}}
    <div class="h-[10rem] w-full bg-[#C2E7F4] pt-8 shadow">
        <div class="ml-[15rem]">
            <h2 class="mt-5 text-s3 font-bold text-cdblack">Categories</h2>
        </div>
    </div>
    {{-- End Header --}}
    @foreach ($categories as $category)
        <h1>{{ $category->id }}</h1>
        <br>
        <h2>{{ $category->name }}</h2>
    @endforeach
</x-app-layout>
