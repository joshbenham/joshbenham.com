<?php

use App\Livewire\Pages\ResumePage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ResumePage::class)
        ->assertStatus(200);
});
