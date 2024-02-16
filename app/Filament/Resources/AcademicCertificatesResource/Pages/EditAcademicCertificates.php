<?php

namespace App\Filament\Resources\AcademicCertificatesResource\Pages;

use App\Filament\Resources\AcademicCertificatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcademicCertificates extends EditRecord
{
    protected static string $resource = AcademicCertificatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
