<?php

use App\Livewire\Pages\ProjectsPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ProjectsPage::class)
        ->assertStatus(200);
});
