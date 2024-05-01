<div>
    <h1 class="mb-3 text-4xl font-bold tracking-tighter md:leading-tight text-slate-900">
        Contact
    </h1>

    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-4" role="alert">
            <p class="font-bold">Success</p>
            {{ session('message') }}
        </div>
    @endif

    <livewire:block name="Contact" />

    <div class="mt-4">
        <form wire:submit="save" class="mt-4">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" wire:model.live="form.name" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('form.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="text" id="email" wire:model.live="form.email" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                <textarea id="content" wire:model.live="form.content" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                @error('form.content') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="bg-fuchsia-800 hover:bg-fuchsia-700 text-white font-bold py-1 px-3 rounded-lg focus:outline-none focus:shadow-outline">Save</button>
            </div>
        </form>
    </div>
</div>
