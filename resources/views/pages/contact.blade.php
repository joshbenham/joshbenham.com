<?php
use function Laravel\Folio\name;
use function Livewire\Volt\{layout, title};

use App\Livewire\Forms\ContactForm;
use Livewire\Volt\Component;

name('contact');
title(__('Contact - joshbenham.net'));

new class extends Component {
    public ContactForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('message', 'Contact information has been sent off.');
    }
};
?>

<x-layouts.app>
    @volt('contact')
        <div>
            <x-header>Contact</x-header>

            <x-alert></x-alert>

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
    @endvolt
</x-layouts.app>
