<?php

declare(strict_types=1);

namespace App\Filament\Resources\BlockResource\Pages;

use App\Filament\Resources\BlockResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateBlock extends CreateRecord
{
    protected static string $resource = BlockResource::class;
}
