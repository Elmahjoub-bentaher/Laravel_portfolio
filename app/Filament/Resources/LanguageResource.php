<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageResource\Pages;
use App\Filament\Resources\LanguageResource\RelationManagers;
use App\Models\Language;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LanguageResource extends Resource
{
    protected static ?string $model = Language::class;

    protected static ?string $navigationIcon = 'heroicon-o-translate';

    protected static ?string $navigationGroup = 'Sections';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('langue')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('langue_level')
                    ->datalist([
                        'Native',
                        'advanced',
                        'Intermidiate',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('langue_rating')
                ->numeric()
                ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask
                    ->numeric()
                    ->minValue(0) // Set the minimum value that the number can be.
                    ->maxValue(10) // Set the maximum value that the number can be.
                )
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('langue'),
                Tables\Columns\TextColumn::make('langue_level'),
                Tables\Columns\TextColumn::make('langue_rating'),
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
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLanguages::route('/'),
            'create' => Pages\CreateLanguage::route('/create'),
            'view' => Pages\ViewLanguage::route('/{record}'),
            'edit' => Pages\EditLanguage::route('/{record}/edit'),
        ];
    }    
}
