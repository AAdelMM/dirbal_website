<?php


namespace App\Filament\Pages;

use Filament\Pages\Page;

class DashboardTabs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'عرض محتويات الموقع';
    
    protected static string $view = 'filament.pages.dashboard-tabs';
    public $activeTab = 'tab1';
    public $activeSubTab = 'subtab1';
    public $activeSubSubTab = 'subsubtab1';
    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->activeSubTab = 'subtab1'; 
        // Reset sub-tab when main tab changes
    }

    public function setActiveSubTab($subtab)
    {
        $this->activeSubTab = $subtab;
    }
    public function setActiveSubSubTab($tab)
{
    $this->activeSubSubTab = $tab;
}
    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }
}
