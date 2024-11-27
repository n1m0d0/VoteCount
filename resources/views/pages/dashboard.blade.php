<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-900 text-gray-100 font-sans">
    <!-- Navbar -->
    <x-navbar>
        User
    </x-navbar>

    <!-- Main Content -->
    <main class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-2">
            <div class="col-span-1 md:col-span-3">
                <x-menu />
            </div>

            <div class="col-span-1 md:col-span-9 p-4">
                <h2 class="text-xl mb-4 font-semibold">{{ __('Dashboard') }}</h2>
            </div>
        </div>
    </main>

    @livewireScripts
</body>

</html>
