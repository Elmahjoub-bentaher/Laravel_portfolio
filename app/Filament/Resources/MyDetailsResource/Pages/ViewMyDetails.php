<?php

namespace App\Filament\Resources\MyDetailsResource\Pages;

use App\Filament\Resources\MyDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMyDetails extends ViewRecord
{
    protected static string $resource = MyDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
