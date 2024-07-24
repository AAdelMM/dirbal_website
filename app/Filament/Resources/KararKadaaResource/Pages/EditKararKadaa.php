<?php

namespace App\Filament\Resources\KararKadaaResource\Pages;

use App\Filament\Resources\KararKadaaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKararKadaa extends EditRecord
{
    protected static string $resource = KararKadaaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
