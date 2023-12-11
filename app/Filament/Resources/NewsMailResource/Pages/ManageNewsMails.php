<?php

namespace App\Filament\Resources\NewsMailResource\Pages;

use App\Filament\Resources\NewsMailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNewsMails extends ManageRecords
{
    protected static string $resource = NewsMailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
