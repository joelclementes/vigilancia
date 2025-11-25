<?php

namespace App\Filament\Resources\TiposVisitaResource\Pages;

use App\Filament\Resources\TiposVisitaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTiposVisitas extends ListRecords
{
    protected static string $resource = TiposVisitaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
