@props(['header', 'activeItem'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="min-h-full bg-white dark:bg-gray-700 dark:text-gray-200">
        @include('partials.layout.navigation')

        <div>
            @isset($header)
                <div class="py-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 dark:text-gray-100">
                        {{ $header }}
                    </h1>
                </div>
            @endisset
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
