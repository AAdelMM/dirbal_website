<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Section;
use App\Models\Branch;
use App\Models\Item;
class DynamicDropdown extends Component
{
    public $sections;
    public $branches = [];
    public $items = [];

    public $selectedSection = null;
    public $selectedBranch = null;
    public $selectedItem = null;

    public function mount()
    {
        $this->sections = Section::all();  // Load sections
    }

    public function updatedSelectedSection($sectionId)
    {
        $this->branches = Branch::where('section_id', $sectionId)->get();
        $this->items = [];
        $this->selectedBranch = null;
        $this->selectedItem = null;
    }

    public function updatedSelectedBranch($branchId)
    {
        $this->items = Item::where('branch_id', $branchId)->get();
        $this->selectedItem = null;
    }

    public function render()
    {
        return view('livewire.dynamic-dropdown');
    }
}
