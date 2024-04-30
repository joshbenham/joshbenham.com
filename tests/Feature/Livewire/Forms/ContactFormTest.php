<?php

namespace Tests\Livewire\Forms;

use App\Livewire\Pages\ContactPage;
use Livewire\Livewire;

it('submits a form', function () {
    Livewire::test(ContactPage::class)
        ->set('form.name', 'Josh Benham')
        ->set('form.email', 'joshbenham@gmail.com')
        ->set('form.content', 'Hello, I am Josh Benham.')
        ->call('save')
        ->assertHasNoErrors()
        ->assertSessionHas('message', 'Contact information has been sent off.');
});

it('validates the form', function () {
    Livewire::test(ContactPage::class)
        ->call('save')
        ->assertHasErrors(['form.name' => 'required', 'form.email' => 'required', 'form.content' => 'required']);
});

it('validates the email', function () {
    Livewire::test(ContactPage::class)
        ->set('form.email', 'joshbenham')
        ->call('save')
        ->assertHasErrors(['form.email' => 'email']);
});
