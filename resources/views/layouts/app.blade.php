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

    {{-- ScrollReveal JS Librabry --}}
    <script src="https://unpkg.com/scrollreveal"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/user.css', 'resources/js/user.js'])


    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

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

<body
    class="font-poppins antialiased scrollbar-thin scrollbar-track-gray-100 scrollbar-thumb-cmblue scrollbar-thumb-rounded-sm">
    {{-- Navigation --}}
    <x-navigation-auth />

    {{-- Preloader --}}
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

    <!-- Page Content -->
    <main id="main">
        {{ $slot }}
    </main>
    @livewire('livewire-ui-modal')
    @livewireScripts
</body>

</html>
