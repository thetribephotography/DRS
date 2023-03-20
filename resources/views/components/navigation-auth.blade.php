    <!-- Navigation component -->
    <nav class="flex flex-wrap items-center justify-between bg-white py-4 shadow lg:px-12">
        <div
            class="flex w-full justify-between border-b-2 border-solid border-gray-300 pr-2 pb-5 lg:w-auto lg:border-b-0 lg:pb-0">
            <x-application-logo class="mr-16" />
            {{-- Mobile Nav --}}
            <div class="block lg:hidden">
                <button class="flex items-center rounded" id="nav">
                    <svg class="h-3 w-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- Search Bar --}}
        <div class="relative mx-auto hidden text-clblack lg:block">
            <form action="/search-results" method="GET">
                <div class="relative w-[30rem]">
                    <input
                        class="block w-full rounded-lg border-gray-300 p-4 pl-10 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                        name="search" type="search" placeholder="Explore various datasets" required>
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <button type="submit">
                            <svg class="h-5 w-5 text-gray-500" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>

                    </div>
                </div>
            </form>
        </div>

        {{-- End seaarch bar --}}
        <div class="ml-[1orem] w-full px-8 lg:flex lg:w-auto lg:px-3">
            {{-- Upload Button --}}
            <a class="text-md ml-2 mt-4 block rounded bg-cmblue px-4 py-2 text-s8 font-medium text-white lg:mt-0"
                href="{{ Route('user.upload') }}">Upload
            </a>
            {{-- End upload button --}}
            @auth
                <div class="ml-6 flex">
                    {{-- Bell Notification --}}
                    <div class="mx-10 h-9 w-9 rounded-full hover:bg-gl">
                        <button class="">
                            <span class="absolute translate-x-3 text-s9 font-bold text-clblack">4</span>
                            <svg class="h-6 w-6 translate-y-1.5 translate-x-1.5 text-clblack"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>


                        </button>
                    </div>

                    {{-- User Icon --}}
                    <div x-data="{ open: false }">
                        {{-- Button --}}
                        <button class="mx-3 flex rounded-full text-sm focus:ring-4 focus:ring-gray-300" type="button"
                            @click="open=!open">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>

                        {{-- Panel --}}
                        <div class="absolute right-16 mt-4 w-28 rounded border border-black bg-gray-500 p-2" x-show="open">
                            <div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit">
                                        Log out
                                    </button>
                                </form>

                                <a classs="block w-full" href="">Action 2</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endauth

            @guest
                <div class="ml-6 flex">
                    <a class="text-md ml-2 mt-4 block rounded border border-cmblue px-4 py-2 text-s8 font-medium text-clblack lg:mt-0"
                        href="{{ Route('login') }}">Login</a>

                    <a class="text-md ml-2 mt-4 block rounded bg-cmblue px-4 py-2 text-s8 font-medium text-white lg:mt-0"
                        href="{{ Route('register') }}">Sign
                        Up</a>
                </div>
            @endguest

        </div>

    </nav>
