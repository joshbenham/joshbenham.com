<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\ContactForm;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class ContactPage extends Component
{
    public ContactForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('message', 'Contact information has been sent off.');
    }

    #[Title('Contact - joshbenham.net')]
    public function render(): View
    {
        return view('livewire.pages.contact-page');
    }
}
