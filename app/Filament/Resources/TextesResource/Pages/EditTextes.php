<?php

namespace App\Filament\Resources\TextesResource\Pages;

use App\Filament\Resources\TextesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextes extends EditRecord
{
    protected static string $resource = TextesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
