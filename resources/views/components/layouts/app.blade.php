<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="flex flex-col max-w-5xl min-h-screen px-4 mx-auto font-sans antialiased">
        <header class="sm:flex items-center justify-between mt-4 sm:mt-8 text-center sm:text-left">
            <a wire:navigate href="{{ route('home') }}" class="text-fuchsia-800 inline-flex font-bold text-xl outline-none hover:text-slate-500 focus:text-slate-500 mb-4 sm:mb-0 ">
                joshbenham
            </a>

            <div class="space-x-4 sm:space-x-8 flex justify-evenly sm:block">
                <a wire:navigate href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">About</a>
                {{-- <a wire:navigate href="/resume" class="{{ request()->routeIs('resume') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Resume</a> --}}
                {{-- <a wire:navigate href="/uses" class="{{ request()->routeIs('uses') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Uses</a> --}}
                {{-- <a wire:navigate href="/goals" class="{{ request()->routeIs('goals') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Goals</a> --}}
                <a wire:navigate href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Contact</a>
            </div>
        </header>

        <main class="flex-grow pb-16">
            {{ $slot }}
        </main>
    </body>
</html>
