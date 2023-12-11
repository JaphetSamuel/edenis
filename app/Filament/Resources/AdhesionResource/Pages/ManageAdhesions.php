<?php

namespace App\Filament\Resources\AdhesionResource\Pages;

use App\Filament\Resources\AdhesionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ManageAdhesions extends ManageRecords
{
    protected static string $resource = AdhesionResource::class;

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()->orderBy('created_at','desc');
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


}
