<?php

namespace App\Filament\Resources\StatutResource\Pages;

use App\Filament\Resources\StatutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStatuts extends ManageRecords
{
    protected static string $resource = StatutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
