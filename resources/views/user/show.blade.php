<x-app-layout :title="$title">

    <div>
        {{-- Header section --}}
        <div class="ml-[20rem] mt-10 flex h-[15rem] w-[55rem] rounded bg-[#F3FCFF] shadow">

            {{-- Image --}}
            <img class="bg-yellow ml-8 mt-6 h-[12rem] w-[12rem] rounded-full border-2 border-gl object-cover"
                src="{{ asset('images/thanos.jpg') }}">

            </img>
            <a href="#">
                <div
                    class="absolute top-[18rem] left-[30rem] h-[1.8rem] w-[1.8rem] rounded-full bg-gray-200 hover:bg-gray-300">
                    <svg class="h-4 w-4 translate-x-1.5 translate-y-1.5 text-cmblue" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>


                </div>
            </a>
            {{-- Small details --}}
            <div class="mt-14 ml-14">
                <h1 class="text-s3 font-semibold text-cdblack">{{ $user->name }}</h1>
                <p class="mt-4 text-sm text-cgray">Created at&nbsp; {{ $user->created_at->format('F d, Y') }}</p>
            </div>
        </div>

        {{-- Info Section --}}
        <div class="ml-[20rem] mt-6 h-[15rem] w-[55rem] rounded border border-emerald-600 bg-[#F3FCFF] px-6">
            <div class="mr-12 mt-4 flex">
                <label class="mb-2 text-sm text-s7 font-medium text-clblack" for="email">

                    Email</label>
                <div class="mr-4">
                    <input
                        class="block h-11 w-full rounded-lg border-2 border-gl p-2.5 px-12 text-s1 text-gray-900 sm:text-sm"
                        id="email" name="email" type="email" value="{{ $user->email }}"
                        placeholder="Johndoe@gmail.com" readonly disabled>

                </div>

            </div>

        </div>
    </div>



</x-app-layout>
