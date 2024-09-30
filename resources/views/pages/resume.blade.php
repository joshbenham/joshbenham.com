<?php
use function Laravel\Folio\name;
use function Livewire\Volt\title;

use Livewire\Volt\Component;

name('resume');
title(__('Resume - joshbenham.net'));

new class extends Component { };
?>

<x-layouts.app>
    @volt('resume')
        <div>
            <x-header>Resume</x-header>

            <livewire:block name="Resume" />
        </div>
    @endvolt
</x-layouts.app>
