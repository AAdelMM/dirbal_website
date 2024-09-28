<?php

namespace App\Filament\Resources\KitabSawtyResource\Pages;

use App\Filament\Resources\KitabSawtyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKitabSawties extends ListRecords
{
    protected static string $resource = KitabSawtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
