<?php

namespace App\Filament\Resources\Ma7kamaOliaResource\Pages;

use App\Filament\Resources\Ma7kamaOliaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMa7kamaOlia extends CreateRecord
{
    protected static string $resource = Ma7kamaOliaResource::class;

    protected function getHeaderActions(): array
    {
        return [
           
            Actions\Action::make('save')
            ->label('حفظ')
            ->action('save')
            ->color('primary')
            ->extraAttributes(['class' => 'filament-page-save-button']),
        ];
    }
}
