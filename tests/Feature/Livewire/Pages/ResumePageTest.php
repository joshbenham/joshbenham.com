<?php

use App\Livewire\Block;
use App\Livewire\Pages\ResumePage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ResumePage::class)
        ->assertStatus(200);
});

it('has a block component', function () {
    Livewire::test(ResumePage::class)
        ->assertSeeLivewire(Block::class);
});
