<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    protected static ?string $navigationGroup = 'Sections';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('scholName')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('text')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('degree')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('startDate')
                        ->required(),
                    Forms\Components\DatePicker::make('endDate')
                        ->required(),
                    Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('scholName'),
                Tables\Columns\TextColumn::make('startDate'),
                Tables\Columns\TextColumn::make('endDate'),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'view' => Pages\ViewEducation::route('/{record}'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }    
}
