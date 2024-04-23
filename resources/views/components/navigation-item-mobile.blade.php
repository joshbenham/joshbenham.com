<a
    wire:navigate
    href="{{ $route }}"
    class="
        {{
            $active
                ? 'text-fuchsia-800'
                : 'text-black-500'
        }}
        flex w-full font-bold outline-none
        py-1 px-3 rounded-lg
        hover:text-fuchsia-800 focus:text-fuchsia-800
        bg-slate-200
    "
>{{ $slot }}</a>
