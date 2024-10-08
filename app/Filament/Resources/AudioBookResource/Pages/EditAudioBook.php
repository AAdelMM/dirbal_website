<?php

namespace App\Filament\Resources\AudioBookResource\Pages;

use App\Filament\Resources\AudioBookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAudioBook extends EditRecord
{
    protected static string $resource = AudioBookResource::class;

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
