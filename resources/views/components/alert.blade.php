@if (session()->has('message'))
    <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-4" role="alert">
        <p class="font-bold">Success</p>
        {{ session('message') }}
    </div>
@endif
