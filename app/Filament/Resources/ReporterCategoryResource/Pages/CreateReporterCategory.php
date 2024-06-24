<?php

namespace App\Filament\Resources\ReporterCategoryResource\Pages;

use App\Filament\Resources\ReporterCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReporterCategory extends CreateRecord
{
    protected static string $resource = ReporterCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
