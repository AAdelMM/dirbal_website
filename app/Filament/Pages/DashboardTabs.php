<?php

namespace App\Filament\Pages;

use App\Models\Makalat3ama;
use App\Models\Mashro3A7kam;
use App\Models\KitabSawty;
use Filament\Pages\Page;



class DashboardTabs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'عرض محتويات الموقع';
    
    protected static string $view = 'filament.pages.dashboard-tabs';

    public $activeTab = 'tab1';
    public $activeSubTab = 'subtab1';
    public $activeSubSubTab = 'subsubtab1';

    // Properties for each tab content
    public $contentCivilJudiciary = [];
    public $contentCriminalJudiciary = [];
    public $contentShar3y = [];
    public $contentKada2y = [];
    public $contentNiabh = [];

    public function mount()
    {
        // Fetch content for each specific tab with its unique identifiers
        $this->contentCivilJudiciary = $this->getContentByIds(1, 2, 14); // القضاء المدني
        $this->contentCriminalJudiciary = $this->getContentByIds(1, 2, 15); // القضاء الجنائى
        $this->contentShar3y = $this->getContentByIds(1, 2, 16); // القضاء الشرعى
        $this->contentKada2y = $this->getContentByIds(1, 2, 19); //  قرارات قضاءية
        $this->contentNiabh = $this->getContentByIds(1, 2, 20); // النيابة العامة
    }

    protected function getContentByIds($sectionId, $branchId, $itemId)
    {
        $makalat = Makalat3ama::where('section_id', $sectionId)
            ->where('branch_id', $branchId)
            ->where('item_id', $itemId)
            ->get(['3nwan as title'])->map(function ($item) {
                return ['title' => $item->title, 'table' => 'مقالات'];
            });

        $mashro3 = Mashro3A7kam::where('section_id', $sectionId)
            ->where('branch_id', $branchId)
            ->where('item_id', $itemId)
            ->get(['title'])->map(function ($item) {
                return ['title' => $item->title, 'table' => 'مشروع احكام'];
            });

        $kitab = KitabSawty::where('section_id', $sectionId)
            ->where('branch_id', $branchId)
            ->where('item_id', $itemId)
            ->get(['3nwan as title'])->map(function ($item) {
                return ['title' => $item->title, 'table' => 'كتاب صوتى'];
            });

        // Merge all collections
        return collect($makalat)->merge($mashro3)->merge($kitab);
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->activeSubTab = 'subtab1';
    }

    public function setActiveSubTab($subtab)
    {
        $this->activeSubTab = $subtab;
    }

    public function setActiveSubSubTab($subsubtab)
    {
        $this->activeSubSubTab = $subsubtab;
    }
}
