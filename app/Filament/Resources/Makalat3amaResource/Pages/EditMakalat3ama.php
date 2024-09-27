<?php

namespace App\Filament\Resources\Makalat3amaResource\Pages;

use App\Filament\Resources\Makalat3amaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMakalat3ama extends EditRecord
{
    protected static string $resource = Makalat3amaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
