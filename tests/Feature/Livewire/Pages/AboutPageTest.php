<?php

use App\Livewire\Pages\AboutPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(AboutPage::class)
        ->assertStatus(200);
});
