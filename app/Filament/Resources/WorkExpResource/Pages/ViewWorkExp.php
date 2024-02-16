<?php

namespace App\Filament\Resources\WorkExpResource\Pages;

use App\Filament\Resources\WorkExpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWorkExp extends ViewRecord
{
    protected static string $resource = WorkExpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
