<?php

namespace App\Filament\Resources\Mashro3A7kamResource\Pages;

use App\Filament\Resources\Mashro3A7kamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMashro3A7kams extends ListRecords
{
    protected static string $resource = Mashro3A7kamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
