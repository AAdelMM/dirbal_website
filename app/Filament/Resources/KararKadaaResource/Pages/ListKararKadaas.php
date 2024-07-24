<?php

namespace App\Filament\Resources\KararKadaaResource\Pages;

use App\Filament\Resources\KararKadaaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKararKadaas extends ListRecords
{
    protected static string $resource = KararKadaaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
