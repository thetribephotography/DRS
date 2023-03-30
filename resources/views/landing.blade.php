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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/user.css', 'resources/js/user.js'])


    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles

    {{-- Custom script for preloader --}}
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".preloader");

            loader.classList.add("preloader--hidden"); //Make preloader fade away

            //Remove preloader from page
            loader.addEventListener("transitioned", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
</head>

<body class="font-poppins scrollbar-thin scrollbar-track-gray-100 scrollbar-thumb-cmblue scrollbar-thumb-rounded-sm">
    @auth
        <x-navigation-auth />
    @endauth
    @guest
        <x-navigation />
    @endguest

    <div class="preloader">
        <div class="preloader-logo">
            <svg class="pre-logo" width="80" height="80" viewBox="0 0 145 145" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect width="145" height="145" rx="60" fill="#00B7FD" />
                <path
                    d="M72.57 98.476C69.0794 98.476 65.9514 97.9093 63.186 96.776C60.4207 95.6427 58.1994 93.9653 56.522 91.744C54.89 89.5227 54.0287 86.848 53.938 83.72H66.314C66.4954 85.488 67.1074 86.848 68.15 87.8C69.1927 88.7067 70.5527 89.16 72.23 89.16C73.9527 89.16 75.3127 88.7747 76.31 88.004C77.3074 87.188 77.806 86.0773 77.806 84.672C77.806 83.4933 77.398 82.5187 76.582 81.748C75.8114 80.9773 74.8367 80.3427 73.658 79.844C72.5247 79.3453 70.8927 78.7787 68.762 78.144C65.6794 77.192 63.1634 76.24 61.214 75.288C59.2647 74.336 57.5874 72.9307 56.182 71.072C54.7767 69.2133 54.074 66.788 54.074 63.796C54.074 59.3533 55.6834 55.8853 58.902 53.392C62.1207 50.8533 66.314 49.584 71.482 49.584C76.7407 49.584 80.9794 50.8533 84.198 53.392C87.4167 55.8853 89.1394 59.376 89.366 63.864H76.786C76.6954 62.3227 76.1287 61.1213 75.086 60.26C74.0434 59.3533 72.706 58.9 71.074 58.9C69.6687 58.9 68.5354 59.2853 67.674 60.056C66.8127 60.7813 66.382 61.8467 66.382 63.252C66.382 64.7933 67.1074 65.9947 68.558 66.856C70.0087 67.7173 72.2754 68.6467 75.358 69.644C78.4407 70.6867 80.934 71.684 82.838 72.636C84.7874 73.588 86.4647 74.9707 87.87 76.784C89.2754 78.5973 89.978 80.932 89.978 83.788C89.978 86.508 89.2754 88.9787 87.87 91.2C86.51 93.4213 84.5154 95.1893 81.886 96.504C79.2567 97.8187 76.1514 98.476 72.57 98.476Z"
                    fill="white" />
            </svg>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="section h-[30rem] w-full border-b border-gl">

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
        <div class="h-[13rem] w-full md:h-[30rem]">
            <img class="h-full w-full object-cover" src="{{ asset('images/code.png') }}" alt="">
        </div>
        {{-- Image End --}}
        <p
            class="absolute top-20 text-s3 font-bold leading-normal text-clblack md:top-48 md:left-40 md:pr-32 md:text-left md:text-s1 md:leading-[5rem]">
            Streamlining
            Software
            Engineering with a
            Comprehensive Data Repository</p>
        <p class="absolute font-medium text-clblack md:left-40 md:top-[23rem] md:pr-32 md:text-left md:text-s6">Optimize
            software
            development process with a comprehensive data repository that spans the entire software development
            lifecycle.</p>
        </div>
    </section>
    {{-- End Hero Sectino --}}

    {{-- Next Section --}}
    <section class="section h-[30rem] w-full border-b border-gl">
        {{-- Main container --}}
        <div class="grid grid-cols-2 gap-10 pt-20 md:pl-40">
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
    <section class="section mb-4 h-[30rem] w-full border-b border-gl">
        {{-- Main container --}}
        <div class="grid grid-cols-2 gap-10 pr-40 pt-20">
            {{-- For Boxes --}}
            <div class="upload-box grid h-[24rem] w-80 grid-cols-2 gap-4 px-4 py-4 md:ml-56">
                <div class="h-full w-full rounded-lg bg-cmblue text-white">
                    <svg class="mb-4 mt-12 h-12 w-12 translate-x-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h1 class="t mt-8 text-center text-white">Article</h1>
                </div>
                <div class="upload-box h-full w-full rounded-lg bg-cmblue text-white">
                    <svg class="mb-4 mt-12 h-12 w-12 translate-x-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                    </svg>
                    <h1 class="t mt-8 text-center">Dataset</h1>
                </div>
                <div class="upload-box h-full w-full rounded-lg bg-cmblue text-white">
                    <svg class="mb-4 mt-12 h-12 w-12 translate-x-10" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                    </svg>
                    <h1 class="t mt-8 text-center text-white">Software</h1>
                </div>
                <div class="upload-box h-full w-full rounded-lg bg-cmblue">
                    <svg class="mb-4 mt-12 h-12 w-12 translate-x-10" viewBox="0 0 55 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M50 35V27.5C50 24.725 47.775 22.5 45 22.5H30V15H35V0H20V15H25V22.5H10C7.225 22.5 5 24.725 5 27.5V35H0V50H15V35H10V27.5H25V35H20V50H35V35H30V27.5H45V35H40V50H55V35H50ZM25 5H30V10H25V5ZM10 45H5V40H10V45ZM30 45H25V40H30V45ZM50 45H45V40H50V45Z"
                            fill="#ffffff" />
                    </svg>
                    <h1 class="t mt-6 text-center font-semibold text-white">Workflow</h1>
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
    <section class="section h-[30rem] w-full border-b border-gl md:pl-40">
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

    <div class="mt-6 w-full text-center text-s4 font-bold text-clblack md:mt-10">
        <h1 class="text-s6 md:text-s7">Featured datasets</h1>
            <div class="mt-4 text-clblack md:mt-8 md:pl-[34rem] lg:block">
            <form action="/search-results" method="GET">
                <div class="relative w-full text-center md:w-[30rem]">
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
<section class="headline py-4 md:mt-8 md:px-4">


<x-card :uploads="$uploads"/>



</section>
    {{-- End of Featured Datasets section --}}


    <x-footer2 />

    @livewireScripts

</body>

</html>

{{-- ----------------------------------------- --}}
<!-- Background image -->
