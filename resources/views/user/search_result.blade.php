<x-guest-layout>

    <div class="py-12">
        <h3 class="text-3xl mb-2 text-center">Search Result</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="/search-results" method="GET">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                    <div class="absolute top-4 left-3">
                        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                    </div>
                    <input type="text" name="search" id="" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="">
                    <div class="absolute top-2 right-2">
                        <button type="submit" class="h-10 w-20 text-white rounded-lg bg-blue-500 hover:bg-blue-600">
                            Search
                        </button>
                    </div>

                </div>
            </form>

            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                @if (count($results) == 0)
                    <p>No result found</p>
                @endif
                @foreach ($results as $result)
                    <div class="flex border-solid border-2 border-gray-700">
                        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/upload.png') }}" alt="Image_no">
                        <div>
                            <h3 class="text-2xl">
                                <a href="/uploads/{{ $result->_id }}">{{ $result->title }}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">
                                {{$result->description}}
                            </div>

                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                               Type: {{$result->type}}
                            </div>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                               Upload date: {{$result->created_at->format('d-m-y')}}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- SEARCH RESULTS --}}
{{--
                @foreach ($results as $result )
                <p> </p>
                <p>{{  }} </p>
                <p>{{ $result->created_at }} </p>
                <p>{{  </p>
                <p>{{ $result->file_type}} </p>
                <br><br><br>
            @endforeach --}}
            </div>

            <div class="mt-6 p-4">
                {{$results->links()}}
            </div>
        </div>

    </div>
</x-guest-layout>