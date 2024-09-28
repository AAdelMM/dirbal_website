<?php

namespace App\Filament\Resources\KitabSawtyResource\Pages;

use App\Filament\Resources\KitabSawtyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKitabSawty extends EditRecord
{
    protected static string $resource = KitabSawtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
