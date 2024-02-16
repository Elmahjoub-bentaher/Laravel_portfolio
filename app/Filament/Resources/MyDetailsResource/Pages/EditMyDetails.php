<?php

namespace App\Filament\Resources\MyDetailsResource\Pages;

use App\Filament\Resources\MyDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyDetails extends EditRecord
{
    protected static string $resource = MyDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
