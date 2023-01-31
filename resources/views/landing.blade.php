<x-guest-layout>
    <!-- Background image -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 350px;
    ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.75)">
        <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
            <h1 class="text-5xl font-bold mt-0 mb-6">Landing Page</h1>
            <h3 class="text-3xl font-bold mb-8">Testing datasets</h3>

            {{-- SEARCH --}}
            <livewire:dataset-search/>
        </div>
        </div>
    </div>
    </div>
    <!-- Background image -->

        <br>
        <br>


    <div class="p-6 bg-white border-b border-gray-200">
        <h1><b>About</b></h1>
    </div>
</x-guest-layout>