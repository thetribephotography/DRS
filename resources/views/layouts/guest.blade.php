<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'DRS') }}</title>

        {{-- Select2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Alpine --}}
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- TailwindCSS --}}
        <script src="https://cdn.tailwindcss.com"></script>

        @livewireStyles
    </head>
    <body>

        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg shadow-md py-4 bg-white relative flex items-center w-full justify-between">
              <div class="px-6 w-full flex flex-wrap items-center justify-between">
                <div class="flex items-center">
                  <button
                    class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentY"
                    aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path fill="currentColor"
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                      </path>
                    </svg>
                  </button>
                </div>
                <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
                  <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
                    <li class="nav-item">
                        <a class="nav-link block mr-10 pr-2 lg:px-6 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                          href="{{route('landing')}}" data-mdb-ripple="true" data-mdb-ripple-color="light"> DRS Logo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link block pr-2 lg:px-6 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                        href="{{route('landing')}}" data-mdb-ripple="true" data-mdb-ripple-color="light">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link block pr-2 lg:px-6 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                        href=" {{route('about')}} " data-mdb-ripple="true" data-mdb-ripple-color="light">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link block pr-2 lg:px-6 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                        href=" {{route('contact')}} " data-mdb-ripple="true" data-mdb-ripple-color="light">Contact</a>
                    </li>
                    <li class="nav-item mb-2 lg:mb-0">
                      <a class="nav-link block pr-2 lg:px-6 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                        href="{{route('terms')}}" data-mdb-ripple="true" data-mdb-ripple-color="light">Terms</a>
                    </li>
                  </ul>
                </div>
              </div>


              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4  mt-2 sm:block z-40">
                    @auth
                        <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                {{-- Dashboard --}}
                                <x-dropdown-link :href="route('dashboard')" onclick=""> Dashboard </x-dropdown-link>

                                {{-- Profile --}}
                                <x-dropdown-link :href="route('user.view')" onclick="">Profile</x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>


                            </x-slot>
                        </x-dropdown>
                    </div>
                    @else
                        <a href="{{ route('login') }}" class=" bg-white hover:bg-gray-100 border border-gray-400 rounded shadow
                        text-gray-800 font-semibold py-2 px-4 text-sm text-gray-700 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded
                            ml-4 text-sm text-gray-700 ">Sign Up</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>
            <!-- Navbar -->
        </header>



        <div class="font-sans">
            {{ $slot }}
        </div>


        {{-- GUEST FOOTER --}}
        <footer class="fixed bottom-0 w-full bg-gray-100 text-center">
            <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2023 Copyright:
              <a class="text-gray-800" href="#">DRS</a>
            </div>
          </footer>
        @livewireScripts

    </body>
</html>
