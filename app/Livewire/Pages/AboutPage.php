<?php

namespace App\Livewire\Pages;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutPage extends Component
{
    #[Title('About - joshbenham.net')]
    public function render(): View
    {
        return view('livewire.pages.about-page');
    }
}
