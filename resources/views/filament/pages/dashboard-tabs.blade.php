<x-filament::page>
    <div x-data="{ 
        activeMainTab: @entangle('activeTab'),
        activeSubTab: @entangle('activeSubTab')
    }">
        <x-filament::tabs>
            <x-filament::tabs.item 
                :active="$activeTab === 'tab1'"
                wire:click="setActiveTab('tab1')">
                <x-slot name="label">
                    القضاء
                </x-slot>
                القضاء
            </x-filament::tabs.item>

            <x-filament::tabs.item 
                :active="$activeTab === 'tab2'"
                wire:click="setActiveTab('tab2')">
                <x-slot name="label">
                    المحكمة العليا
                </x-slot>
                المحكمة العليا
            </x-filament::tabs.item>

            <x-filament::tabs.item 
                :active="$activeTab === 'tab3'"
                wire:click="setActiveTab('tab3')">
                <x-slot name="label">
                    مدونة
                </x-slot>
                مدونة
            </x-filament::tabs.item>
        </x-filament::tabs>

        <!-- Sub-tabs for القضاء -->
        <div x-show="activeMainTab === 'tab1'" class="mt-4" style="margin-top:3rem;">
            <x-filament::tabs>
                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab1'"
                    wire:click="setActiveSubTab('subtab1')">
                    <x-slot name="label">
                       المحكمة
                    </x-slot>
                    المحكمة
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab2'"
                    wire:click="setActiveSubTab('subtab2')">
                    <x-slot name="label">
                        النيابة العامة
                    </x-slot>
                    النيابة العامة
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab3'"
                    wire:click="setActiveSubTab('subtab3')">
                    <x-slot name="label">
                       معهد القضاء
                    </x-slot>
                    معهد القضاء
                </x-filament::tabs.item>
            </x-filament::tabs>

            <div class="mt-4" style="margin-top:10rem;">
                <div x-show="activeSubTab === 'subtab1'">
                    محتوى المحكمة
                </div>
                <div x-show="activeSubTab === 'subtab2'">
                    محتوى النيابة العامة
                </div>
                <div x-show="activeSubTab === 'subtab3'">
                    محتوى معهد القضاء
                </div>
            </div>
        </div>

        <!-- Sub-tabs for المحكمة العليا -->
        <div x-show="activeMainTab === 'tab2'" class="mt-4" style="margin-top:3rem;">
            <x-filament::tabs>
                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab1'"
                    wire:click="setActiveSubTab('subtab1')">
                    <x-slot name="label">
                        احكام
                    </x-slot>
                    احكام
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab2'"
                    wire:click="setActiveSubTab('subtab2')">
                    <x-slot name="label">
                        منتقى
                    </x-slot>
                    منتقى
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab3'"
                    wire:click="setActiveSubTab('subtab3')">
                    <x-slot name="label">
                      شؤون فنية
                    </x-slot>
                    شؤون فنية
                </x-filament::tabs.item>
            </x-filament::tabs>

            <div class="mt-8" style="margin-top:10rem;">
                <div x-show="activeSubTab === 'subtab1'">
                    محتوى الاحكام 
                </div>
                <div x-show="activeSubTab === 'subtab2'">
                    محتوى المنتقى
                </div>
                <div x-show="activeSubTab === 'subtab3'">
                    محتوى شؤون فنية
                </div>
            </div>
        </div>

        <!-- Sub-tabs for مدونة -->
        <div x-show="activeMainTab === 'tab3'" class="mt-4" style="margin-top:3rem;">
            <x-filament::tabs>
                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab1'"
                    wire:click="setActiveSubTab('subtab1')">
                    <x-slot name="label">
                       اسلاميات
                    </x-slot>
                    اسلاميات
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab2'"
                    wire:click="setActiveSubTab('subtab2')">
                    <x-slot name="label">
                       كتاب
                    </x-slot>
                    كتاب
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab3'"
                    wire:click="setActiveSubTab('subtab3')">
                    <x-slot name="label">
                        مباحث
                    </x-slot>
                    مباحث
                </x-filament::tabs.item>
            </x-filament::tabs>

            <div class="mt-4" style="margin-top:10rem;">
                <div x-show="activeSubTab === 'subtab1'">
                    محتوى الاسلاميات 
                </div>
                <div x-show="activeSubTab === 'subtab2'">
                    محتوى الكتب
                </div>
                <div x-show="activeSubTab === 'subtab3'">
                    محتوى المباحث
                </div>
            </div>
        </div>
    </div>
</x-filament::page>