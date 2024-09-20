<?php

namespace App\Filament\Resources\HokmKada2yResource\Pages;

use App\Filament\Resources\HokmKada2yResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHokmKada2y extends EditRecord
{
    protected static string $resource = HokmKada2yResource::class;

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
