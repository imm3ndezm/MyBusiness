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

<body class="font-sans text-gray-900 dark:text-gray-100 antialiased">
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


    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"></x-application-logo>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>


</body>

</html>
