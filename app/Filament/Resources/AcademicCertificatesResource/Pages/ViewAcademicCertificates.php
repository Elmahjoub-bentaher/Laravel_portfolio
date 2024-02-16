<?php

namespace App\Filament\Resources\AcademicCertificatesResource\Pages;

use App\Filament\Resources\AcademicCertificatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAcademicCertificates extends ViewRecord
{
    protected static string $resource = AcademicCertificatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
