<?php

namespace App\Livewire\Pages;

use Illuminate\View\View;
use Livewire\Component;

class AboutPage extends Component
{
    public function render(): View
    {
        return view('livewire.pages.about-page')
            ->title('About - joshbenham.net');
    }
}
