<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdhesionResource\Pages;
use App\Filament\Resources\AdhesionResource\RelationManagers;
use App\Models\Adhesion;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdhesionResource extends Resource
{
    protected static ?string $model = Adhesion::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('prenom')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('profession')
                    ->maxLength(191),
                Forms\Components\TextInput::make('pays')
                    ->maxLength(191),
                Forms\Components\TextInput::make('telephone')
                    ->tel()
                    ->maxLength(191),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(200),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('prenom'),
                Tables\Columns\TextColumn::make('profession'),
                Tables\Columns\TextColumn::make('pays'),
                Tables\Columns\TextColumn::make('telephone'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('ajouté le')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAdhesions::route('/'),
        ];
    }    
}
