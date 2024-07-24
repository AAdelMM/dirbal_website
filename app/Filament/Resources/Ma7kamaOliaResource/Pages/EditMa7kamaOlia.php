<?php

namespace App\Filament\Resources\Ma7kamaOliaResource\Pages;

use App\Filament\Resources\Ma7kamaOliaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMa7kamaOlia extends EditRecord
{
    protected static string $resource = Ma7kamaOliaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
