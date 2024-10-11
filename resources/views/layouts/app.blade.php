<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 transition-colors duration-700">
    <div id="toast-container" class="fixed bottom-4 right-4 z-50"></div>

    <a href="#" x-data="{ showButton: false }" x-init="$nextTick(() => { showButton = window.scrollY > 100 })"
        @click.prevent="window.scrollTo({ top: 0, behavior: 'smooth' })" x-show="showButton" x-transition
        @scroll.window="showButton = window.scrollY > 100"
        class="animate-bounce fixed bottom-5 right-5 z-50 rounded-full p-3 bg-gray-300/75 dark:bg-gray-800/75 transition-colors duration-100 backdrop:blur-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6 stroke-gray-800 dark:stroke-gray-100">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
        </svg>
    </a>



    @include('layouts.navigation')
    <div class="pt-8">
        @yield('content')
    </div>

    <x-footer />
</body>

</html>
