<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home') }}</title>

    {{-- Favicon --}}
    <link href="{{ asset('favicon/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link type="image/png" href="{{ asset('favicon/favicon-32x32.png') }}  " rel="icon" sizes="32x32">
    <link type="image/png" href="{{ asset('favicon/favicon-16x16.png') }}" rel="icon" sizes="16x16">
    <link href="{{ asset('favicon/site.webmanifest') }}" rel="manifest">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">





    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body class="font-poppins">
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

        <div class="menu w-full flex-grow px-8 lg:flex lg:w-auto lg:items-center lg:px-3">
            <div class="text-s8 font-regular lg:flex-grow">
                <a class="mt-4 mr-2 block rounded px-4 py-2 lg:mt-0 lg:inline-block" href="#">
                    UPLOAD
                </a>
                <a class="mt-4 mr-2 block rounded px-4 py-2 lg:mt-0 lg:inline-block" href="#">
                    CONTACT
                </a>
                <a class="mt-4 mr-2 block rounded px-4 py-2 lg:mt-0 lg:inline-block" href="#">
                    ABOUT US
                </a>
            </div>
            {{-- Search Bar --}}
            <div class="relative mx-auto hidden text-clblack lg:block">
                <form action="/search-results" method="GET">
                    <div class="relative">
                        <input
                            class="block w-full rounded-lg border-gray-300 p-4 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="default-search" name="search" type="search" placeholder="Explore various datasets"
                            required>
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
            <div class="ml-6 flex">
                <a class="text-md ml-2 mt-4 block rounded border border-cmblue px-4 py-2 text-s8 font-medium text-clblack lg:mt-0"
                    href="{{ Route('login') }}">Login</a>

                <a class="text-md ml-2 mt-4 block rounded bg-cmblue px-4 py-2 text-s8 font-medium text-white lg:mt-0"
                    href="{{ Route('register') }}">Sign
                    Up</a>
            </div>
        </div>

    </nav>
    {{-- Hero Section --}}
    <section class="h-[30rem] w-full border-b border-gl">
        {{-- Image --}}
        <div class="h-[30rem] w-full">
            <img class="h-full w-full object-cover" src="{{ asset('images/code.png') }}" alt="">
        </div>
        {{-- Image End --}}
        <p class="absolute top-48 left-40 pr-32 text-left text-s1 font-bold leading-[5rem] text-clblack">
            Streamlining
            Software
            Engineering with a
            Comprehensive Data Repository</p>
        <p class="absolute left-40 top-[23rem] pr-32 text-left text-s6 font-medium text-clblack">Optimize software
            development process with a comprehensive data repository that spans the entire software development
            lifecycle.</p>
        </div>
    </section>
    {{-- End Hero Sectino --}}

    {{-- Next Section --}}
    <section class="h-[30rem] w-full border-b border-gl">
        {{-- Main container --}}
        <div class="grid grid-cols-2 gap-10 pl-40 pt-20">
            {{-- For text --}}
            <div>
                <p class="mb-4 text-s2 font-bold text-clblack">High-Quality Research Data</p>
                <p class="text-s6 font-semibold text-cgray">Our repository provides high-quality data from various
                    sources to
                    help developers,
                    researchers, and
                    software engineers keep up with industry trends and advancements. It includes everything needed to
                    create cutting-edge software, carry out research, or stay informed.</p>
            </div>
            {{-- For image --}}
            <div class="ml-56 h-80 w-80">
                <img class="h-full w-full" src="{{ asset('images/search-data.png') }}" alt="">
            </div>
        </div>
    </section>
    {{-- End of section --}}

    {{-- Next Section --}}
    <section class="h-[30rem] w-full">
        {{-- Main container --}}
        <div class="grid grid-cols-2 gap-10 pr-40 pt-20">
            {{-- For Boxes --}}
            <div class="ml-56 grid h-[24rem] w-80 grid-cols-2 gap-4 bg-yellow-500">
                <div class="h-20 w-20 bg-blue-400">
                    <h1>Hello</h1>
                </div>
                <div class="h-20 w-20 bg-pink-400">
                    <h1>Hi</h1>
                </div>
                <div class="h-20 w-20 bg-blue-500">
                    <h1>What's up</h1>
                </div>
                <div class="h-20 w-20 bg-red-400">
                    <h1>Howdy</h1>
                </div>
            </div>
            {{-- For text --}}
            <div>
                <p class="mb-4 text-s2 font-bold text-clblack">Discover a Wide Range of Uploads</p>
                <p class="text-s6 font-semibold text-cgray">Our Software Engineering data repository offers a variety of
                    upload options
                    With an intuitive upload process, it is easy to get started and share your work with the world.</p>
            </div>
        </div>
    </section>
    {{-- End of section --}}

    {{-- Footer --}}
    <footer class="bg-cmblue text-center text-white">
        <div class="container px-10 pt-10">
            <div>
                <form action="">
                    <div class="items-center justify-center">
                        <div class="md:ml-auto md:mb-6">
                            <p class="text-s5 font-medium">
                                Subsribe to our Newsletter
                            </p>
                        </div>

                        <div class="relative md:mb-6">
                            <input type="text" placeholder="thanos@gmail.com" />
                        </div>

                        <div class="mb-6 md:mr-auto">
                            <button
                                class="inline-block rounded border-2 border-neutral-50 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                data-te-ripple-init data-te-ripple-color="light" type="submit">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-4">
                <div class="mb-6">
                    <h5 class="mb-2.5 text-s8 font-bold uppercase">Company</h5>

                    <ul class="mb-0 list-none">
                        <li>
                            <a class="text-left text-white" href="#!">About Us</a>
                        </li>
                        <li>
                            <a class="text-left text-white" href="#!">Carrers</a>
                        </li>
                        <li>
                            <a class="text-left text-white" href="#!">Partners</a>
                        </li>
                        <li>
                            <a class="text-left text-white" href="#!">Leadership</a>
                        </li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h5 class="mb-2.5 text-s8 font-bold uppercase">Resources</h5>

                    <ul class="mb-0 list-none">
                        <li>
                            <a class="text-white" href="#!">Link 1</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Link 2</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Link 3</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h5 class="mb-2.5 text-s8 font-bold uppercase">Support</h5>

                    <ul class="mb-0 list-none">
                        <li>
                            <a class="text-white" href="#!">FAQs</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Legal</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Help Center</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Terms of Use</a>
                        </li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h5 class="mb-2.5 text-s8 font-bold uppercase">Contact</h5>

                    <ul class="mb-0 list-none">
                        <li>
                            <a class="text-white" href="#!">Link 1</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Link 2</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Link 3</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="p-4 pl-24 text-left">
            © 2023 Copyright:
            <a class="text-white" href="#">SoftwareRepoHub</a> All rights reserved
        </div>
    </footer>
    {{-- End of Footer --}}



    @livewireScripts

</body>

</html>

{{-- ----------------------------------------- --}}
<!-- Background image -->
