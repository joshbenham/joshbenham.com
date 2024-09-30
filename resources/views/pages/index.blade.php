<?php
use function Laravel\Folio\name;
use function Livewire\Volt\{layout, title};

use Livewire\Volt\Component;

name('about');
title(__('About - joshbenham.net'));

new class extends Component { };
?>

<x-layouts.app>
    @volt('about')
        <div>
            <x-header>About</x-header>

            <livewire:block name="About"/>
        </div>
    @endvolt
</x-layouts.app>
