<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Fiddy</title>

    <!-- Styles -->
    @vite(['resources/css/app.scss'])
    @livewireStyles
    @stack('styles')
</head>

<body class="font-sans">


    <div class="text-gray-900 antialiased w-full h-full">
        @include('includes.guest.navigation')
        <main class="relative h-100 min-h-screen xl:px-0" style="overflow-x:hidden">
            {{ $slot }}
        </main>
        @include('includes.guest.footer')
    </div>


    @stack('modals')

    <div id="toaster"></div>

    <script type="text/javascript">
        window.onload = setLightTheme;

        function setLightTheme() {
            localStorage.theme = "light";
            document.documentElement.classList.remove("dark");
            document.documentElement.setAttribute("data-theme", "light");
        }
    </script>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireScripts
    @stack('scripts')
</body>

</html>
