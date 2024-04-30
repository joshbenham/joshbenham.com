<?php

use App\Livewire\Block;
use App\Livewire\Pages\ProjectsPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ProjectsPage::class)
        ->assertStatus(200);
});

it('has a block component', function () {
    Livewire::test(ProjectsPage::class)
        ->assertSeeLivewire(Block::class);
});
