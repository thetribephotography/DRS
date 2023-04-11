<div>
    {{-- Sub main --}}
    <div class="h-full w-full py-[2rem] pl-[6rem]">
        {{-- Top --}}
        <div class="flex h-full w-[81.5rem] justify-between">
            <div class="flex">
                <h1 class="text-s4 font-semibold text-cdblack">Groups</h1>
                <span class="ml-4 mt-3 text-s6 font-medium text-clgray">56</span>
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
                {{-- Card --}}
                <div class="b h-full w-full border border-red-400 px-3 py-4">
                    {{-- Top --}}
                    <div class="flex justify-between">
                        <h3 class="text-s6 font-semibold text-cdblack">Cloud Chasers</h3>
                        <div class="flex h-6 rounded bg-l-blue px-2.5 py-0.5 text-sm text-s9 font-medium text-m-blue">
                            <div class="mr-1 h-2 w-2 translate-y-1.5 rounded-full bg-m-blue"></div>Member
                        </div>

                    </div>
                    {{-- Owner --}}
                    <div class="mt-5 flex">
                        <img class="mr-2 h-12 w-12 rounded-full" src="{{ asset('images/pic_software.png') }}"
                            alt="">
                        <div class="mb-2">
                            <h3 class="text-s7 font-semibold text-clblack">David Tony</h3>
                            <p class="text-s7 font-regular text-gg">davidtony@gmail.com</p>
                        </div>
                    </div>
                    {{-- Uploads and downloads --}}
                    <div class="flex pt-6 pl-[4.5rem]">
                        <div class="">
                            <p class="text-s8 font-medium text-gg">Members</p>
                            <span class="mt-2 ml-4 text-s7 font-semibold text-clblack">45</span>
                        </div>
                        <div class="ml-6">
                            <p class="text-s8 font-medium text-gg">Uploads</p>
                            <span class="mt-2 ml-4 text-s7 font-semibold text-clblack">13</span>
                        </div>
                    </div>
                    {{-- Date created --}}
                    <div class="mt-8 flex justify-between text-s9 font-medium text-gg">
                        Created at 12 March 2022
                        <div class="ml-12" x-data="{ open: false }">
                            <div class="absolute h-18 w-18 bg-red-500" x-show="open">
                                Hey
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                x-show="true" @click="open = !open">
                                <path fill="currentColor"
                                    d="M12 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0-6a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2Z" />
                            </svg>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
