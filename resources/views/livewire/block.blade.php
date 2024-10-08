<div>
    @if ($this->exists())
        <div class="prose">
            {!! Str::markdown($this->format(), [
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]) !!}
        </div>
    @elseif (Auth::check())
        <div class="bg-yellow-200 text-yellow-800 border-l-4 border-yellow-500 p-4" role="alert">
            <p class="font-bold">Warning</p>
            <p>You are missing the Block with the name "{{ $name }}".</p>
        </div>
    @endif
</div>
