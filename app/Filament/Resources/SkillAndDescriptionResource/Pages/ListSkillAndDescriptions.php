<?php

namespace App\Filament\Resources\SkillAndDescriptionResource\Pages;

use App\Filament\Resources\SkillAndDescriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkillAndDescriptions extends ListRecords
{
    protected static string $resource = SkillAndDescriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
