<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkExpResource\Pages;
use App\Filament\Resources\WorkExpResource\RelationManagers;
use App\Models\WorkExp;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkExpResource extends Resource
{
    protected static ?string $model = WorkExp::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Sections';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jobTitle')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('company')
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
                //
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
            'index' => Pages\ListWorkExps::route('/'),
            'create' => Pages\CreateWorkExp::route('/create'),
            'view' => Pages\ViewWorkExp::route('/{record}'),
            'edit' => Pages\EditWorkExp::route('/{record}/edit'),
        ];
    }    
}
