<?php

namespace App\Filament\Resources\Mashro3A7kamResource\Pages;

use App\Filament\Resources\Mashro3A7kamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMashro3A7kam extends CreateRecord
{
    protected static string $resource = Mashro3A7kamResource::class;

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
