<?php

use App\Livewire\Pages\ContactPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ContactPage::class)
        ->assertStatus(200);
});
