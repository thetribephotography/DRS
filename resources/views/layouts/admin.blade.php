<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SoftwareRepoHub') }}</title>

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

    <!-- JQuery/Select-2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    {{-- Tom-Select  --}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/user.css', 'resources/js/user.js'])


    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
</head>

<body class="font-inter antialiased">

    {{-- MAIN CONTAINER --}}
    <div class="flex">
        {{-- Main container for side bar --}}
        <div class="relative h-screen bg-blue-500" x-data="{ open: false }">
            {{-- Side Bar --}}
            <div x-bind:class="!open ? 'relative left-0 flex h-screen w-20 flex-col bg-cmblue p-4' :
                'relative left-0 flex h-screen w-60 flex-col bg-cmblue p-4'"
                x-show="!open">
                {{-- Logo action --}}
                <div class="mt-2 flex h-10 w-full flex-row items-center">
                    {{-- Circle logo --}}
                    <div class="h-12 w-12">
                        <img class="" src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    {{-- Logo text --}}
                    <span class="pl-4 text-lg font-semibold text-white" x-show="open">SoftwareRepoHub</span>

                </div>
                {{-- Search bar --}}
                <div class="mt-10 flex h-9 flex-row items-center overflow-hidden rounded-md bg-gl text-slate-900"
                    @click="open=!open" x-show="open">
                    {{-- Search icon --}}
                    <div class="grid place-items-center pl-4">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>

                    {{-- Search Field --}}
                    <input class="h-full w-full border-none bg-transparent text-sm text-cdblack outline-none"
                        name="search" type="text" placeholder="Type to search">
                </div>
                {{-- SideBar Menu --}}
                <div class="mt-10">
                    <ul>
                        <li
                            class="my-2 flex h-10 w-full cursor-pointer items-center rounded-md bg-white text-s7 text-cmblue">
                            <a class="text-md ml-3 flex flex-row" href="#">
                                <svg class="mr-4 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                                <h3 x-show="open">Dashboard</h3>
                            </a>
                        </li>
                        <li
                            class="hover:bg-cm-blue delay-50 my-2 flex h-10 w-full cursor-pointer items-center rounded-md text-s7 text-white transition duration-200 ease-in-out hover:bg-white hover:text-cmblue">
                            <a class="text-md ml-3 flex flex-row" href="#">
                                <svg class="mr-4 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>


                                <h3 x-show="open">Users</h3>
                            </a>
                        </li>
                        <li
                            class="my-2 flex h-10 w-full cursor-pointer items-center rounded-md text-s7 text-white transition duration-200 ease-in-out hover:bg-white hover:text-cmblue">
                            <a class="text-md ml-3 flex flex-row" href="#">
                                <svg class="mr-4 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>


                                <h3 x-show="open">Uploads</h3>
                                <svg class="ml-16 h-4 w-4 translate-y-1" x-show="open"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </a>
                        </li>
                        <li
                            class="my-2 flex h-10 w-full cursor-pointer items-center rounded-md text-s7 text-white transition duration-200 ease-in-out hover:bg-white hover:text-cmblue">
                            <a class="text-md ml-3 flex flex-row" href="#">
                                <svg class="mr-4 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                                </svg>


                                <h3 x-show="open">Reports</h3>
                            </a>
                        </li>
                        <li
                            class="my-2 flex h-10 w-full cursor-pointer items-center rounded-md text-s7 text-white transition duration-200 ease-in-out hover:bg-white hover:text-cmblue">
                            <a class="text-md ml-3 flex flex-row" href="#">
                                <svg class="mr-4 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                </svg>


                                <h3 x-show="open">Error Logs</h3>
                            </a>
                        </li>
                        <li
                            class="my-2 flex h-10 w-full cursor-pointer items-center rounded-md text-s7 text-white transition duration-200 ease-in-out hover:bg-white hover:text-cmblue">

                            <!-- Log out temporairly Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf


                                <button type="submit">
                                    <svg class="h-5 w-5 translate-x-3" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                </button>

                            </form>


                        </li>
                        <li
                            class="mt-10 flex h-10 w-full cursor-pointer items-center rounded-md text-s7 text-white transition duration-200 ease-in-out hover:bg-white hover:text-cmblue">
                            <a class="text-md ml-3 flex flex-row" href="#">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>


                                <h3 x-show="open">Settings</h3>
                            </a>
                        </li>

                    </ul>
                </div>
                {{-- Open and close sidebar --}}
                <div class="absolute -right-6 top-0 flex h-screen w-10 items-center">
                    {{-- Icon --}}
                    <div
                        class="grid h-8 w-8 cursor-pointer place-items-center overflow-hidden rounded-full bg-cmblue text-gl">
                        {{-- Left --}}
                        <svg class="h-4 w-4" x-show="open" @click="open = !open" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>

                        {{-- Right --}}
                        <svg class="h-4 w-4" @click="open = !open" x-show="!open" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <div class="h-screen w-screen">
            {{ $slot }}
        </div>
    </div>


    @livewireScripts
</body>

</html>
