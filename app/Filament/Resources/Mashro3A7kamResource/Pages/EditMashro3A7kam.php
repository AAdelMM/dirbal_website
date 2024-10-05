<?php

namespace App\Filament\Resources\Mashro3A7kamResource\Pages;

use App\Filament\Resources\Mashro3A7kamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMashro3A7kam extends EditRecord
{
    protected static string $resource = Mashro3A7kamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('save')
            ->label('حفظ')
            ->action('save')
            ->color('primary')
            ->extraAttributes(['class' => 'filament-page-save-button']),
        ];
    }
}
