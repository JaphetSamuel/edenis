<?php

namespace App\Filament\Resources\TextesResource\Pages;

use App\Filament\Resources\TextesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTextes extends ViewRecord
{
    protected static string $resource = TextesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
