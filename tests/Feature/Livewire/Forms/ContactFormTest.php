<?php

namespace Tests\Livewire\Forms;

use Livewire\Volt\Volt;

it('submits a form', function () {
    Volt::test('contact')
        ->set('form.name', 'Josh Benham')
        ->set('form.email', 'joshbenham@gmail.com')
        ->set('form.content', 'Hello, I am Josh Benham.')
        ->call('save')
        ->assertHasNoErrors()
        ->assertSessionHas('message', 'Contact information has been sent off.');
});

it('validates the form', function () {
    Volt::test('contact')
        ->call('save')
        ->assertHasErrors(['form.name' => 'required', 'form.email' => 'required', 'form.content' => 'required']);
});

it('validates the email', function () {
    Volt::test('contact')
        ->set('form.email', 'joshbenham')
        ->call('save')
        ->assertHasErrors(['form.email' => 'email']);
});
