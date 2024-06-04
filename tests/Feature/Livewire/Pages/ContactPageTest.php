<?php

use App\Livewire\Block;
use App\Livewire\Pages\ContactPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ContactPage::class)
        ->assertStatus(200);
});

it('has a block component', function () {
    Livewire::test(ContactPage::class)
        ->assertSeeLivewire(Block::class);
});
