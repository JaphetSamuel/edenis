<?php

namespace App\Filament\Resources\TextesResource\Pages;

use App\Filament\Resources\TextesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextes extends ListRecords
{
    protected static string $resource = TextesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
