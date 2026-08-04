<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Asset CSS & JS Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen flex flex-col">

    <!-- Shared Navigation Bar -->
    <nav class="bg-white dark:bg-[#161615] border-b border-gray-200 dark:border-[#2e2e2e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="{{ route('home') }}" class="font-bold text-lg text-gray-900 dark:text-white">
                    My App
                </a>
                <div class="flex items-center gap-6">
                    <a href="{{ route('home') }}" 
                       class="text-sm font-semibold {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white' }} transition">
                        Home
                    </a>
                    <span class="text-gray-400">/</span>
                    <a href="{{ route('profile') }}" 
                       class="text-sm font-semibold {{ request()->routeIs('profile') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white' }} transition">
                        Profile
                    </a>
                    <span class="text-gray-400">/</span>
                    <a href="{{ route('surprise') }}" 
                       class="text-sm font-semibold {{ request()->routeIs('surprise') ? 'text-blue-600 dark:text-blue-400' : 'text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white' }} transition">
                        Surprise
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-1 flex items-center justify-center w-full p-6">
        @yield('content')
    </main>

</body>
</html>