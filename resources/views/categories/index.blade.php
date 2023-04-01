<x-app-layout :title="$title">

    {{-- Header start --}}
    <div class="h-[5rem] w-full bg-[#C2E7F4] shadow lg:h-[10rem] lg:pt-8">
        <div class="ml-4 lg:ml-[10rem]">
            <h2 class="pt-6 text-s5 font-bold text-cdblack lg:mt-5 lg:pt-0 lg:text-s3">Categories</h2>
        </div>
    </div>
    {{-- End Header --}}



    <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow">
        <a href="#">
            <img class="rounded-t-lg" src="{{ asset('images/thanos.jpg') }}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Noteworthy technology
                    acquisitions 2021</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
            <a class="inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-blue-800"
                href="#">
                Read more
                <svg class="ml-2 -mr-1 h-4 w-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>

    @foreach ($categories as $category)
        <h1>{{ $category->id }}</h1>
        <br>
        <h2>{{ $category->name }}</h2>
    @endforeach
</x-app-layout>
