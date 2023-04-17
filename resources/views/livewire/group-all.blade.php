<div>
    {{-- Sub main --}}
    <div class="h-full w-full py-[2rem] pl-[6rem]">
        {{-- Top --}}
        <div class="flex h-full w-[81.5rem] justify-between">
            <div class="flex">
                <h1 class="text-s4 font-semibold text-cdblack">Groups</h1>
                <span class="ml-4 mt-3 text-s6 font-medium text-clgray">{{ count($groups) }}</span>
            </div>

            <div class="ml-8 flex w-1/2 items-center">
                {{-- SVG sort --}}
                <div class="mr-2">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>

                </div>
                {{-- circle for hover --}}
                <div class="a absolute h-4 w-4 rounded-full bg-cmblue">

                </div>
                {{-- SVG layoutt --}}
                <div class="mr-6">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M20 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16Zm-9 10H5v6h6v-6Zm2 6h6V5h-6v14ZM11 5H5v6h6V5Z" />
                    </svg>
                </div>
                <div class="relative mr-2 w-full">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-cmblue" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                        class="bg-gray-50 text-gray-900 block w-full rounded-lg border border-gg p-2.5 pl-10 text-sm focus:border-cmblue focus:ring-clblue"
                        id="simple-search" type="text" placeholder="Search" required>
                </div>

                <button
                    class="w-[9rem] rounded-md bg-cmblue px-3 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-b-hover"
                    type="button">New Group</button>
            </div>


        </div>

        {{-- content --}}
        <div class="g mt-6 h-full w-[81.5rem]">

            {{-- Flex Box --}}
            <div class="g grid-cols-4 gap-4 lg:grid">
                @foreach ($groups as $group)
                    {{-- Card --}}
                    <div class="h-full w-full rounded-md border border-gg bg-white px-3 py-4 hover:border-cmblue">
                        {{-- Top --}}
                        <div class="flex justify-between">
                            <h3 class="text-s6 font-semibold text-cdblack">{{ $group->name }}</h3>
                            <div
                                class="flex h-6 rounded bg-l-green px-2.5 py-0.5 text-sm text-s9 font-medium text-m-green">
                                <div class="mr-1 h-2 w-2 translate-y-1.5 rounded-full bg-m-green"></div>Owner
                            </div>

                        </div>
                        {{-- Owner --}}
                        <div class="mt-5 flex">
                            <img class="mr-2 h-12 w-12 rounded-full"
                                src="{{ $group->user->profile_picture ? asset('storage/' . $group->user->profile_picture) : asset('images/user.jpeg') }}"
                                alt="">
                            <div class="mb-2">
                                <h3 class="text-s7 font-semibold text-clblack">{{ $group->user->name }}</h3>
                                <p class="text-s7 font-regular text-gg">{{ $group->user->email }}</p>
                            </div>
                        </div>
                        {{-- Uploads and downloads --}}
                        <div class="flex pt-6 pl-[4.5rem]">
                            <div class="">
                                <p class="text-s8 font-medium text-gg">Members</p>
                                <span
                                    class="mt-2 ml-4 text-s7 font-semibold text-clblack">{{ count($group->group_members) }}</span>
                            </div>
                            <div class="ml-6">
                                <p class="text-s8 font-medium text-gg">Uploads</p>
                                <span class="mt-2 ml-4 text-s7 font-semibold text-clblack">13</span>
                            </div>
                        </div>
                        {{-- Date created --}}
                        <div class="mt-8 flex justify-between text-s9 font-medium text-gg">
                            <p class="mt-4 ml-2">Created at {{ $group->created_at->format('F-d-Y') }}
                            </p>
                            <div class="ml-12" x-data="{ open: false }" x-show="true">
                                {{-- Drp start --}}
                                <button
                                    class="text-gray-900 hover:bg-gray-100 inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium focus:outline-none"
                                    type="button" x-show="true" @click="open=!open">
                                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div class="divide-gray-100 absolute top-[19rem] left-[13rem] z-10 w-44 divide-y rounded-lg bg-white shadow transition duration-200 ease-in-out"
                                    x-show="open">
                                    {{-- View --}}
                                    <div class="py-2">
                                        <a class="text-gray-700 block px-4 py-2 text-sm transition duration-75 ease-in hover:bg-[#CFF1FF] hover:text-clblue"
                                            href="#">
                                            <div class="flex">
                                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <p class="ml-1"> View</p>
                                            </div>
                                        </a>
                                    </div>
                                    {{-- Leave --}}
                                    <div class="py-2">
                                        <a class="text-gray-700 block px-4 py-2 text-sm transition duration-75 ease-in hover:bg-[#CFF1FF] hover:text-clblue"
                                            href="#">
                                            <div class="flex">
                                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                                </svg>
                                                <p class="ml-1">Leave</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                {{-- Drop end --}}
                            </div>
                        </div>
                    </div>
                    {{-- End card --}}
                @endforeach

            </div>
        </div>
    </div>
</div>
