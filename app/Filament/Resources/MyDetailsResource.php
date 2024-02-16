<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MyDetailsResource\Pages;
use App\Filament\Resources\MyDetailsResource\RelationManagers;
use App\Models\MyDetails;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MyDetailsResource extends Resource
{
    protected static ?string $model = MyDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('profession')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('dayOfBirth')
                        ->required(),
                    Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('address')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('profile_image')
                        ->required(),
                    Forms\Components\Textarea::make('aboutMe'),
                    Forms\Components\FileUpload::make('resume'),
                    Forms\Components\FileUpload::make('logo')
                        ->placeholder('if you have a logo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               // Tables\Columns\ImageColumn::make('profile_image'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('profession'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('dayOfBirth'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('address'),
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
            'index' => Pages\ListMyDetails::route('/'),
            'create' => Pages\CreateMyDetails::route('/create'),
            'view' => Pages\ViewMyDetails::route('/{record}'),
            'edit' => Pages\EditMyDetails::route('/{record}/edit'),
        ];
    }    
}
