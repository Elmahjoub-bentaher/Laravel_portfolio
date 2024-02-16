<?php

namespace App\Filament\Resources\SkillAndDescriptionResource\Pages;

use App\Filament\Resources\SkillAndDescriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSkillAndDescription extends ViewRecord
{
    protected static string $resource = SkillAndDescriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
