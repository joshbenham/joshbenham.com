<?php

use App\Livewire\Block;
use App\Livewire\Pages\AboutPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(AboutPage::class)
        ->assertStatus(200);
});

it('has a block component', function () {
    Livewire::test(AboutPage::class)
        ->assertSeeLivewire(Block::class);
});
