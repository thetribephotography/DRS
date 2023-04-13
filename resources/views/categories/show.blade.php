<x-app-layout :title="$title">
    {{-- Header start --}}
    <div class="h-[10rem] w-full bg-[#C2E7F4] pt-8 shadow">
        <div class="ml-[6rem]">
            <span
                class="mr-2 mt-5 rounded bg-cmblue px-2.5 py-0.5 text-sm font-medium uppercase text-white">Category</span>
            <h2 class="mt-2 text-s3 font-bold text-cdblack">{{ $category->name }}</h2>
        </div>
    </div>
    {{-- End Header --}}

    {{-- Main Content --}}
    <x-minicard :uploads="$uploads" />
    {{-- End manin content --}}
</x-app-layout>
