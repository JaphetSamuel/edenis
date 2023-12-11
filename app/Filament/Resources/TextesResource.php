<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextesResource\Pages;
use App\Filament\Resources\TextesResource\RelationManagers;
use App\Models\Textes;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use JKHarley\FilamentTrumbowyg\Trumbowyg;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use FilamentEditorJs\Forms\Components\EditorJs;
use Ekremogul\FilamentGrapesjs\Forms\Components\GrapesJs;

class TextesResource extends Resource
{
    protected static ?string $model = Textes::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    
    protected static ?string $navigationLabel = "Contenu";

    protected static ?string $modelLabel = "Contenu";
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tag')->required(),
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(191),
                TinyEditor::make('contenu')
                    ->columnspan('full')
                ->hiddenOn('edit'),
                GrapesJs::make('contenu')
                ->columnSpan('full')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('tag'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('ajouté le')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('modifié le')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTextes::route('/'),
            'create' => Pages\CreateTextes::route('/create'),
            'view' => Pages\ViewTextes::route('/{record}'),
            'edit' => Pages\EditTextes::route('/{record}/edit'),
        ];
    }    
}
