    <!-- Navigation component -->
    <nav class="flex flex-wrap items-center justify-between bg-white py-4 lg:px-12">
        <div
            class="flex w-full justify-between border-b-2 border-solid border-gray-300 pr-2 pb-5 lg:w-auto lg:border-b-0 lg:pb-0">

            {{-- Mobile MENU Bar --}}
            <div class="block lg:hidden">
                <button class="flex items-center rounded" id="nav">
                    <svg class="mt-2 h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>

            </div>
            {{-- Logo --}}
            <a href="/">
                <x-application-logo class="mr-14" />
            </a>



            {{-- Mobile Search Nav --}}
            <div class="block lg:hidden">
                <svg class="mt-2 h-6 w-6 translate-y-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            <div class="lg:hidden">
                @auth
                    {{-- User Icon --}}
                    <div class="z-30" x-data="{ open: false }">
                        {{-- Button --}}
                        <button class="mx-3 mt-2 flex rounded-full text-sm focus:ring-4 focus:ring-gray-300 lg:mt-0"
                            type="button" @click="open=!open">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/user.jpeg') }}"
                                alt="user photo">

                        </button>

                        {{-- Panel --}}
                        <div class="absolute right-16 mt-4 w-44 rounded border border-gl bg-white p-2 pt-4" x-show="open">

                            @role('registered')
                                <a class="" href="{{ route('user.index') }}">
                                    <div class="full mb-4 flex border border-gray-100 px-3 text-clgray hover:text-cmblue">
                                        <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                        </svg>

                                        <p> Dashboard</p>
                                    </div>
                                </a>
                            @else
                                <a class="" href="{{ route('admin.index') }}">
                                    <div class="full mb-4 flex border border-gray-100 px-3 text-clgray hover:text-cmblue">
                                        <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                        </svg>

                                        <p> Dashboard</p>
                                    </div>
                                </a>
                            @endrole


                            <a class="" href="{{ route('user.view-profile') }}">
                                <div class="mb-4 flex px-3 text-cgray hover:text-cmblue">
                                    <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <p>Profile</p>
                                </div>
                            </a>
                            <a class="" href="#">
                                <div class="mb-4 flex px-3 text-cgray hover:text-cmblue">
                                    <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                    </svg>

                                    <p>Notifications</p>
                                </div>
                            </a>
                            <div class="mb-4 flex px-3 text-cgray hover:text-cmblue">
                                <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>

                                <form action="{{ Route('logout') }}" method="POST">
                                    @csrf
                                    <button class="hover:text-cmblue" type="submit">
                                        Log out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>

        {{-- Search Bar --}}
        <div class="relative mx-auto hidden text-clblack md:block">
            <form action="/search-results" method="GET">
                <div class="relative md:w-[20rem] lg:w-[30rem]">
                    <input
                        class="block w-full rounded-lg border-gray-300 p-4 pl-10 text-sm text-gray-900 focus:border-cmblue focus:ring-cmblue"
                        name="search" type="search" placeholder="Explore various datasets" required>
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <button type="submit">
                            <svg class="h-5 w-5 text-gray-500" aria-hidden="true" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>

                    </div>
                </div>
            </form>
        </div>
        {{-- End seaarch bar --}}

        <div class="hidden w-full px-8 lg:ml-[10rem] lg:flex lg:w-auto lg:px-3">
            {{-- Upload Button --}}
            <a class="text-md ml-2 mt-4 rounded bg-cmblue px-4 py-2 text-s8 font-medium text-white lg:mt-0"
                href="{{ Route('user.upload') }}">Upload
            </a>
            {{-- End upload button --}}
            @auth
                <div class="ml-6 flex">
                    {{-- Bell Notification --}}
                    {{-- <div class="mx-10 h-9 w-9 rounded-full hover:bg-gl">
                        <button class="">
                            <span class="absolute translate-x-3 text-s9 font-bold text-clblack">4</span>
                            <svg class="h-6 w-6 translate-y-1.5 translate-x-1.5 text-clblack"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>


                        </button>
                    </div> --}}
                    {{-- End bell --}}

                    {{-- User Icon --}}
                    <div class="z-30" x-data="{ open: false }">
                        {{-- Button --}}
                        <button class="mx-3 flex rounded-full text-sm focus:ring-4 focus:ring-gray-300" type="button"
                            @click="open=!open">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/user.jpeg') }}"
                                alt="user photo">

                        </button>

                        {{-- Panel --}}
                        <div class="absolute right-16 mt-4 w-44 rounded border border-gl bg-white p-2 pt-4"
                            x-show="open">

                            @role('registered')
                                <a class="" href="{{ route('user.index') }}">
                                    <div class="full mb-4 flex border border-gray-100 px-3 text-clgray hover:text-cmblue">
                                        <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                        </svg>

                                        <p> Dashboard</p>
                                    </div>
                                </a>
                            @else
                                <a class="" href="{{ route('admin.index') }}">
                                    <div class="full mb-4 flex border border-gray-100 px-3 text-clgray hover:text-cmblue">
                                        <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                        </svg>

                                        <p> Dashboard</p>
                                    </div>
                                </a>
                            @endrole


                            <a class="" href="{{ route('user.view-profile') }}">
                                <div class="mb-4 flex px-3 text-cgray hover:text-cmblue">
                                    <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <p>Profile</p>
                                </div>
                            </a>
                            <a class="" href="#">
                                <div class="mb-4 flex px-3 text-cgray hover:text-cmblue">
                                    <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                    </svg>

                                    <p>Notifications</p>
                                </div>
                            </a>
                            <div class="mb-4 flex px-3 text-cgray hover:text-cmblue">
                                <svg class="mr-2 h-5 w-5 translate-y-0.5" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>

                                <form action="{{ Route('logout') }}" method="POST">
                                    @csrf
                                    <button class="hover:text-cmblue" type="submit">
                                        Log out
                                    </button>
                                </form>
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
