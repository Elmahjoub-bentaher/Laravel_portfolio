<?php

namespace App\Filament\Resources\SkillAndDescriptionResource\Pages;

use App\Filament\Resources\SkillAndDescriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkillAndDescription extends EditRecord
{
    protected static string $resource = SkillAndDescriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
