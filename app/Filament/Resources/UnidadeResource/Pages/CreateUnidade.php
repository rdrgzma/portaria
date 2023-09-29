<?php

namespace App\Filament\Resources\UnidadeResource\Pages;

use App\Filament\Resources\UnidadeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUnidade extends CreateRecord
{
    protected static string $resource = UnidadeResource::class;
    protected function getRedirectUrl(): string
{
    return $this->previousUrl ?? $this->getResource()::getUrl('index');
}
}
