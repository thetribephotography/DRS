<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

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


    {{-- Anime JS --}}
    <script src="anime.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body class="font-poppins scrollbar-thin scrollbar-track-gray-100 scrollbar-thumb-cmblue scrollbar-thumb-rounded-sm">
    @auth
        <x-navigation-auth />
    @endauth
    @guest
        <x-navigation />
    @endguest


    {{-- Hero Section --}}
    <section class="h-[30rem] w-full border-b border-gl">

        {{-- Flash Message - Success --}}
        @if (session('success'))
            <div class="absolute left-[40rem] mb-4 flex rounded-lg bg-green-500 p-4 text-sm text-white transition duration-700 ease-in-out"
                id="flash-message" role="alert">
                <svg class="mr-3 inline h-5 w-5 flex-shrink-0" aria-hidden="true" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success:</span> {{ session('success') }}
                </div>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('flash-message').classList.add('opacity-0');
                    setTimeout(function() {
                        document.getElementById('flash-message').remove();
                    }, 10000)
                }, 4000); // remove the alert after 4 seconds
            </script>
        @endif
        {{-- Flash Message - Error --}}
        @if (session('error'))
            <div class="absolute left-[40rem] mb-4 flex rounded-lg bg-red-500 p-4 text-sm text-white transition duration-700 ease-in-out"
                id="flash-message" role="alert">
                <svg class="mr-3 inline h-5 w-5 flex-shrink-0" aria-hidden="true" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Error:</span> {{ session('error') }}
                </div>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('flash-message').classList.add('opacity-0');
                    setTimeout(function() {
                        document.getElementById('flash-message').remove();
                    }, 10000)
                }, 4000); // remove the alert after 4 seconds
            </script>
        @endif

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
    <section class="mb-4 h-[30rem] w-full border-b border-gl">
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
                <p class="text-s6 font-semibold text-cgray">Our Software Engineering data repository offers a variety
                    of
                    upload options
                    With an intuitive upload process, it is easy to get started and share your work with the world.</p>
            </div>
        </div>
    </section>
    {{-- End of section --}}

    {{-- Next Section --}}
    <section class="h-[30rem] w-full border-b border-gl pl-40">
        {{-- Main container --}}
        <div class="grid grid-cols-2 gap-10 pr-40 pt-20">
            {{-- For text --}}
            <div class="pt-10">
                <p class="mb-4 text-s2 font-bold text-clblack">Amount of research data available</p>
                <p class="text-s6 font-semibold text-cgray">Suited and trusted with large data archiving standards</p>
            </div>
            {{-- For Circle --}}
            <div class="ml-[12rem] mt-2 h-56 w-56 rounded-full bg-cmblue pt-[5rem] text-center drop-shadow-custom" ">
                <span class="text-s3 font-bold text-white">400+</span>
            </div>
        </div>
    </section>
    {{-- End of section --}}

    <div class="mt-10 w-full text-center text-s4 font-bold text-clblack">
        <h1>Featured datasets</h1>
               <div class="mt-8 pl-[34rem] text-clblack lg:block">
            <form action="/search-results" method="GET">
                <div class="relative w-[30rem] text-center">
                    <input
class="block w-full rounded-lg border-gray-300 p-4 pl-10 text-sm font-regular text-gray-900 focus:border-cmblue focus:ring-cmblue" name="search" type="search" placeholder="Explore various datasets" required>
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <button type="submit">
                            <svg class="h-5 w-5 text-gray-500" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
{{-- Featured Datasets section --}}
<div class="h-52 w-full bg-yellow-300">
<div class="ml[30rem] w-[55rem] bg-orange-500">

</div>
</div>
{{-- End of Featured Datasets section --}}

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
                            <input type="text" placeholder="thanos@gmail.com"/>
                        </div>

                        <div class="mb-6 md:mr-auto">
                            <button
class="inline-block rounded border-2 border-neutral-50 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light" type="submit">
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
                            <a class="text-left text-white" href="{{ route('about') }}">About Us</a>
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
                            <a class="text-white" href="#!">Blog</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">Case Studies</a>
                        </li>
                        <li>
                            <a class="text-white" href="#!">News</a>
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
                            <a class="text-white" href="{{ route('terms') }}">Terms of Use</a>
                        </li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h5 class="mb-2.5 text-s8 font-bold uppercase">Contact</h5>

                    <ul class="mb-0 list-none">
                        <li>
                            <a class="text-white" href="www.babcock.edu.ng">Babcock University Illishan Remo, Ogun state</a>
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
