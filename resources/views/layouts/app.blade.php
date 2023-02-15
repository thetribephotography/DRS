<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'DRS') }}</title>



        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

         <!-- JQuery/Select-2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

        {{-- Select2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


         {{-- Tom-Select  --}}
         <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet"/>
         <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/user.css', 'resources/js/user.js'])

        {{-- Alpine --}}
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @livewireStyles

        {{-- Taiwind Configuration --}}
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a"}
                        }
                    },
                    fontFamily: {
                            'body': [
                                'Montserrat',
                                'ui-sans-serif',
                                'system-ui',
                                '-apple-system',
                                'system-ui',
                                'Segoe UI',
                                'Roboto',
                                'Helvetica Neue',
                                'Arial',
                                'Noto Sans',
                                'sans-serif',
                                'Apple Color Emoji',
                                'Segoe UI Emoji',
                                'Segoe UI Symbol',
                                'Noto Color Emoji'
                                ],
                            'sans': [
                                'Montserrat',
                                'ui-sans-serif',
                                'system-ui',
                                '-apple-system',
                                'system-ui',
                                'Segoe UI',
                                'Roboto',
                                'Helvetica Neue',
                                'Arial',
                                'Noto Sans',
                                'sans-serif',
                                'Apple Color Emoji',
                                'Segoe UI Emoji',
                                'Segoe UI Symbol',
                                'Noto Color Emoji'
                        ]
                    }
                }
            }
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts

    </body>
</html>
