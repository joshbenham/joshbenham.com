<?php

namespace App\Livewire;

use App\Models\Block as ModelsBlock;
use Illuminate\View\View;
use Livewire\Component;

class Block extends Component
{
    public string $name;

    public function exists(): bool
    {
        return ModelsBlock::where('name', $this->name)->exists();
    }

    public function format(): string
    {
        $content = ModelsBlock::where('name', $this->name)->value('content');

        return $content;
    }

    public function render(): View
    {
        return view('livewire.block');
    }
}
