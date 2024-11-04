<?php
use function Laravel\Folio\name;
use function Livewire\Volt\{layout, title};

use Livewire\Volt\Component;

name('projects');
title(__('Projects - joshbenham.com'));

new class extends Component { };
?>

<x-layouts.app>
    @volt('projects')
        <div>
            <x-header>Projects</x-header>

            <livewire:block name="Projects" />
        </div>
    @endvolt
</x-layouts.app>
