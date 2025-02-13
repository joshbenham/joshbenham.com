<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class ContactForm extends Form
{
    #[Validate('required')]
    public $name = '';

    #[Validate(['required', 'email'])]
    public $email = '';

    #[Validate('required')]
    public $content = '';

    public function store()
    {
        $this->validate();

        Contact::create(
            $this->only(['name', 'email', 'content'])
        );

        return redirect()->to('/contact');
    }
}
