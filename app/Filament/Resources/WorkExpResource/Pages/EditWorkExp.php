<?php

namespace App\Filament\Resources\WorkExpResource\Pages;

use App\Filament\Resources\WorkExpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkExp extends EditRecord
{
    protected static string $resource = WorkExpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
