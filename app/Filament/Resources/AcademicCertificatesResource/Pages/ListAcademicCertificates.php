<?php

namespace App\Filament\Resources\AcademicCertificatesResource\Pages;

use App\Filament\Resources\AcademicCertificatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcademicCertificates extends ListRecords
{
    protected static string $resource = AcademicCertificatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
