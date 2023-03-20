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

<body class="font-poppins antialiased">
    {{-- Navigation --}}
    <x-navigation-auth />


    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
</body>

</html>
