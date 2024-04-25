<?php

namespace App\Livewire\Pages;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProjectsPage extends Component
{
    #[Title('Projects - joshbenham.net')]
    public function render(): View
    {
        return view('livewire.pages.projects-page');
    }
}
