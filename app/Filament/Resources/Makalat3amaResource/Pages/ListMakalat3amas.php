<?php

namespace App\Filament\Resources\Makalat3amaResource\Pages;

use App\Filament\Resources\Makalat3amaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMakalat3amas extends ListRecords
{
    protected static string $resource = Makalat3amaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
