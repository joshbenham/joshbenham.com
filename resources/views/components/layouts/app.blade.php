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
    <body class="bg-slate-100 font-sans antialiased">
        <header class="my-8 text-center">
            <a wire:navigate href="{{ route('about') }}" class="text-fuchsia-800 font-bold text-xl outline-none hover:text-slate-500 focus:text-slate-500 mb-4 sm:mb-0 ">
                joshbenham
            </a>

            <nav x-data="{ open: false }">
                <div class="hidden md:block md:space-x-4 mt-4 sm:space-x-4">
                    <x-navigation-item :route="route('about')" :active="request()->routeIs('about')">About</x-navigation-item>
                    <x-navigation-item :route="route('contact')" :active="request()->routeIs('contact')">Contact</x-navigation-item>
                    {{-- <x-navigation-item :route="route('resume')" :active="request()->routeIs('resume')">Resume</x-navigation-item> --}}
                    {{-- <x-navigation-item :route="route('uses')" :active="request()->routeIs('uses')">Uses</x-navigation-item> --}}
                    {{-- <x-navigation-item :route="route('goals')" :active="request()->routeIs('goals')">Goals</x-navigation-item> --}}
                </div>

                <button
                    @click="open = !open"
                    class="
                        md:hidden font-bold outline-none
                        mt-4 py-1 px-3 rounded-lg
                        hover:text-fuchsia-800 focus:text-fuchsia-800
                        bg-slate-200
                    "
                >
                    Menu
                </button>

                <div x-show="open" class="md:hidden max-w-xl mx-auto">
                    <div class="mt-4 space-y-3 bg-white rounded shadow p-5 mx-2 sm:mx-0">
                        <x-navigation-item-mobile :route="route('about')" :active="request()->routeIs('about')">About</x-navigation-item-mobile>
                        <x-navigation-item-mobile :route="route('contact')" :active="request()->routeIs('contact')">Contact</x-navigation-item-mobile>
                        {{-- <x-navigation-item-mobile :route="route('resume')" :active="request()->routeIs('resume')">Resume</x-navigation-item-mobile> --}}
                        {{-- <x-navigation-item-mobile :route="route('uses')" :active="request()->routeIs('uses')">Uses</x-navigation-item-mobile> --}}
                        {{-- <x-navigation-item-mobile :route="route('goals')" :active="request()->routeIs('goals')">Goals</x-navigation-item-mobile> --}}
                    </div>
                </div>
            </nav>
        </header>

        <main class="max-w-xl mx-auto">
            <div class="bg-white rounded shadow p-5 mx-4 sm:mx-0">
                {{ $slot }}
            </div>
        </main>

        <footer class="text-center font-bold my-8">
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
