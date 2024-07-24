<?php

namespace App\Filament\Resources\Ma7kamaOliaResource\Pages;

use App\Filament\Resources\Ma7kamaOliaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMa7kamaOlias extends ListRecords
{
    protected static string $resource = Ma7kamaOliaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
