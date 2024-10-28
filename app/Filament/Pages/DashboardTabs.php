<?php


namespace App\Filament\Pages;

use Filament\Pages\Page;

class DashboardTabs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'هذه الصفحة للاختبار';
    
    protected static string $view = 'filament.pages.dashboard-tabs';

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }
}
