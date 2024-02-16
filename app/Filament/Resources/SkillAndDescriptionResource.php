<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillAndDescriptionResource\Pages;
use App\Filament\Resources\SkillAndDescriptionResource\RelationManagers;
use App\Models\SkillAndDescription;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillAndDescriptionResource extends Resource
{
    protected static ?string $model = SkillAndDescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'Sections';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                Forms\Components\Textarea::make('description')
                        ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
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
            'index' => Pages\ListSkillAndDescriptions::route('/'),
            'create' => Pages\CreateSkillAndDescription::route('/create'),
            'view' => Pages\ViewSkillAndDescription::route('/{record}'),
            'edit' => Pages\EditSkillAndDescription::route('/{record}/edit'),
        ];
    }    
}
