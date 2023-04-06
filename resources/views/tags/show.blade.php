<x-app-layout :title="$title">
    {{-- Header start --}}
    <div class="h-[10rem] w-full bg-[#C2E7F4] pt-8 shadow">
        <div class="ml-[15rem]">
            <span class="mr-2 mt-5 rounded bg-cmblue px-2.5 py-0.5 text-sm font-medium uppercase text-white">Tag</span>
            <h2 class="mt-2 text-s3 font-bold text-cdblack">{{ $tag->name }}</h2>
        </div>
    </div>
    {{-- End Header --}}
</x-app-layout>
