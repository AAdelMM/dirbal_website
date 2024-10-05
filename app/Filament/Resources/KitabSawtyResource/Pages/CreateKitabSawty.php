<?php

namespace App\Filament\Resources\KitabSawtyResource\Pages;

use App\Filament\Resources\KitabSawtyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKitabSawty extends CreateRecord
{
    protected static string $resource = KitabSawtyResource::class;
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
