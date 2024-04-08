<?php

namespace App\Livewire\Pages;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class ContactPage extends Component
{
    #[Title('Contact - joshbenham.net')]
    public function render(): View
    {
        return view('livewire.pages.contact-page');
    }
}
