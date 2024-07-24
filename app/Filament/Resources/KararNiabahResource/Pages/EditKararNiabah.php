<?php

namespace App\Filament\Resources\KararNiabahResource\Pages;

use App\Filament\Resources\KararNiabahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKararNiabah extends EditRecord
{
    protected static string $resource = KararNiabahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
