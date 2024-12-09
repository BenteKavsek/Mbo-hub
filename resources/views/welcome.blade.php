<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/js/app.js'])
</head>


<body>
    <header>
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth

            @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Inloggen
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Registeren
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>
    <main>

        <h1>Test</h1>
        sudo chmod -R 775 storage bootstrap/cache

        <div id="app"></div>

    </main>
    <footer>
        FOOTER
    </footer>
</body>