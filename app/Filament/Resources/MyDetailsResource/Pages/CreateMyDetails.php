<?php

namespace App\Filament\Resources\MyDetailsResource\Pages;

use App\Filament\Resources\MyDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyDetails extends CreateRecord
{
    protected static string $resource = MyDetailsResource::class;
}
