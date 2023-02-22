<!DOCTYPE html>
<html>
    <head>
          {{-- Select2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/user.css', 'resources/js/user.js'])

        {{-- Alpine --}}
         <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

         @livewireStyles

        {{-- File pond --}}
         <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
         
    </head>
    <body>
     
    </body>

    @livewireScripts
    
    {{-- File pond --}}
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
</html>