<?php

namespace App\Filament\Resources\Makalat3amaResource\Pages;

use App\Filament\Resources\Makalat3amaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMakalat3ama extends CreateRecord
{
    protected static string $resource = Makalat3amaResource::class;
    protected function getHeaderActions(): array
    {
        return [
           
            Actions\Action::make('save')
            ->label('حفظ')
            ->action('create')
            ->color('primary')
            ->extraAttributes(['class' => 'filament-page-save-button']),
        ];
    }
}
