<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Fiddy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open Sans:300,400,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @stack('styles')
</head>
<body>

    
    <div class="font-sans text-gray-900 antialiased w-full h-full">
        @include('includes.guest.navigation')
        <main class="relative h-100 min-h-screen md:px-14 px-5 py-14 max-w-screen-lg mx-auto" style="overflow-x:hidden">
            {{ $slot }}
        </main>
        @include('includes.guest.footer')
    </div>

    
    @stack('modals')

    <div id="toaster"></div>

    <script type="text/javascript">
        window.onload=setLightTheme;
        function setLightTheme() {
            localStorage.theme = "light";
            document.documentElement.classList.remove("dark");
            document.documentElement.setAttribute("data-theme", "light");
        }
    </script>
    @livewireScripts
    @stack('scripts')
</body>
</html>