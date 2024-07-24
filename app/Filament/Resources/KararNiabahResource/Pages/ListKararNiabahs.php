<?php

namespace App\Filament\Resources\KararNiabahResource\Pages;

use App\Filament\Resources\KararNiabahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKararNiabahs extends ListRecords
{
    protected static string $resource = KararNiabahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
