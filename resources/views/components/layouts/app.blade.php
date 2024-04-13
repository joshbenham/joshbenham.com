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
    <body class="container-sm w-1/2 mx-auto font-sans antialiased">
        <header class="mt-8 text-center">
            <a wire:navigate href="{{ route('about') }}" class="text-fuchsia-800 font-bold text-xl outline-none hover:text-slate-500 focus:text-slate-500 mb-4 sm:mb-0 ">
                joshbenham
            </a>

            <div class="space-x-4 mt-4 sm:space-x-4 flex justify-evenly sm:block">
                <a
                    wire:navigate
                    href="{{ route('about') }}"
                    class="
                        {{
                            request()->routeIs('about')
                                ? 'text-fuchsia-800'
                                : 'text-black-500'
                        }}
                        inline-flex font-bold outline-none
                        py-1 px-3 rounded-lg
                        hover:text-fuchsia-800 focus:text-fuchsia-800
                        bg-slate-200
                    "
                >About</a>
                <a
                    wire:navigate
                    href="{{ route('contact') }}"
                    class="
                        {{ request()->routeIs('contact') ? 'text-fuchsia-800' : 'text-black-500' }}
                        inline-flex font-bold outline-none
                        py-1 px-3 rounded-lg
                        hover:text-fuchsia-800 focus:text-fuchsia-800
                        bg-slate-200
                    "
                >Contact</a>
                {{-- <a wire:navigate href="/resume" class="{{ request()->routeIs('resume') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Resume</a> --}}
                {{-- <a wire:navigate href="/uses" class="{{ request()->routeIs('uses') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Uses</a> --}}
                {{-- <a wire:navigate href="/goals" class="{{ request()->routeIs('goals') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Goals</a> --}}
            </div>
        </header>

        <main class="pb-8">
            {{ $slot }}
        </main>

        <footer class="text-center font-bold mb-16">
            <p class="text-sm font-bold text-gray-500">© {{ date('Y') }} joshbenham.com</p>

            <p class="mt-2 text-sm text-gray-500">
                Built using
                <a class="underline" href="https://laravel.com" target="_blank">Laravel</a>,
                <a class="underline" href="https://livewire.laravel.com">Livewire</a>,
                <a class="underline" href="https://filamentphp.com">Filament</a>,
                <a class="underline" href="https://alpinejs.dev">Alpine JS</a>
                and
                <a class="underline" href="https://tailwindcss.com">Tailwind CSS</a>.
            </p>

            <p class="mt-2 text-sm text-gray-500">
                <a class="underline" href="https://github.com/joshbenham/joshbenham.com">Code found on github.com</a>
            </p>
        </footer>
    </body>
</html>
