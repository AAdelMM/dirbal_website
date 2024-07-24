<?php

namespace App\Filament\Resources\HokmKada2yResource\Pages;

use App\Filament\Resources\HokmKada2yResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHokmKada2ies extends ListRecords
{
    protected static string $resource = HokmKada2yResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
