<x-app-layout :title="$title">

    {{-- Header start --}}
    <div class="h-[5rem] w-full bg-[#C2E7F4] shadow lg:h-[10rem] lg:pt-8">
        <div class="ml-4 lg:ml-[10rem]">
            <h2 class="pt-6 text-s5 font-bold text-cdblack lg:mt-5 lg:pt-0 lg:text-s3">Categories</h2>
        </div>
    </div>
    {{-- End Header --}}


    <div class="g grid grid-rows-1 md:grid-cols-2 lg:grid-cols-4 lg:px-32">
        <x-category-card :categories="$categories" />
    </div>
</x-app-layout>
