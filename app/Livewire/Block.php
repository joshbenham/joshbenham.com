<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Block as ModelsBlock;
use Illuminate\View\View;
use Livewire\Component;

final class Block extends Component
{
    public string $name;

    public function exists(): bool
    {
        return ModelsBlock::where('name', $this->name)->exists();
    }

    public function format(): string
    {
        return ModelsBlock::where('name', $this->name)->value('content');
    }

    public function render(): View
    {
        return view('livewire.block');
    }
}
