<x-guest-layout :title="$title">
    <div class="py-12">
        <h3 class="mb-2 text-center text-3xl">Search Result</h3>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form action="/search-results" method="GET">
                <div class="relative m-4 rounded-lg border-2 border-gray-100">
                    <div class="absolute top-4 left-3">
                        <i class="fa fa-search z-20 text-gray-400 hover:text-gray-500"></i>
                    </div>
                    <input class="z-0 h-14 w-full rounded-lg pl-10 pr-20 focus:shadow focus:outline-none" id=""
                        name="search" type="text" placeholder="">
                    <div class="absolute top-2 right-2">
                        <button class="h-10 w-20 rounded-lg bg-blue-500 text-white hover:bg-blue-600" type="submit">
                            Search
                        </button>
                    </div>

                </div>
            </form>

            <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">
                @if (count($results) == 0)
                    <p>No result found</p>
                @endif
                @foreach ($results as $result)
                    <div class="flex border-2 border-solid border-gray-700">
                        <img class="mr-6 hidden w-48 md:block" src="{{ asset('images/upload.png') }}" alt="Image_no">
                        <div>
                            <h3 class="text-2xl">
                                <a href="/upload/public/{{ $result->slug }}">{{ $result->title }}</a>
                            </h3>
                            <div class="mb-4 text-xl font-bold">
                                {{ $result->description }}
                            </div>

                            <div class="mt-4 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                                Type: {{ $result->type }}
                            </div>
                            <div class="mt-4 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                                Upload date: {{ $result->created_at->format('d-m-y') }}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- SEARCH RESULTS --}}
                {{--
                @foreach ($results as $result)
                <p> </p>
                <p>{{  }} </p>
                <p>{{ $result->created_at }} </p>
                <p>{{  </p>
                <p>{{ $result->file_type}} </p>
                <br><br><br>
            @endforeach --}}
            </div>

            <div class="mt-6 p-4">
                {{ $results->links() }}
            </div>
        </div>

    </div>
</x-guest-layout>
