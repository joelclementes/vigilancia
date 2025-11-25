<?php

namespace App\Filament\Resources\TiposVisitaResource\Pages;

use App\Filament\Resources\TiposVisitaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTiposVisita extends EditRecord
{
    protected static string $resource = TiposVisitaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
