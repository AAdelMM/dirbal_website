<x-filament::page>
    <div x-data="{ 
        activeMainTab: @entangle('activeTab'),
        activeSubTab: @entangle('activeSubTab'),
        activeSubSubTab: @entangle('activeSubSubTab')
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
                       المحاكم الدنيا
                    </x-slot>
                    المحاكم الدنيا
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

            <!-- Sub-sub-tabs for المحاكم الدنيا -->
            <div x-show="activeSubTab === 'subtab1'" class="mt-4" style="margin-top:3rem;">
                <x-filament::tabs>
                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab1'"
                        wire:click="setActiveSubSubTab('subsubtab1')">
                        <x-slot name="label">
                           القضاء المدني 
                        </x-slot>
                        القضاء المدني
                    </x-filament::tabs.item>

                   <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab2'"
                        wire:click="setActiveSubSubTab('subsubtab2')">
                        <x-slot name="label">
                            القضاء الجنائى
                        </x-slot>
                        القضاء الجنائى
                    </x-filament::tabs.item> 

                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab3'"
                        wire:click="setActiveSubSubTab('subsubtab3')">
                        <x-slot name="label">
                            القضاء الشرعى
                        </x-slot>
                        القضاء الشرعى
                    </x-filament::tabs.item>
                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab4'"
                        wire:click="setActiveSubSubTab('subsubtab4')">
                        <x-slot name="label">
                            قرارات قضائية
                        </x-slot>
                        قرارات قضائية
                    </x-filament::tabs.item>
                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab5'"
                        wire:click="setActiveSubSubTab('subsubtab5')">
                        <x-slot name="label">
                            النيابة العامة
                        </x-slot>
                        النيابة العامة
                    </x-filament::tabs.item>
                </x-filament::tabs>

                <div class="mt-4" style="margin-top:3rem;">
                    <div x-show="activeSubSubTab === 'subsubtab1'">
                        محتوى القضاء المدنى
                    </div>
                    <div x-show="activeSubSubTab === 'subsubtab2'">
                        محتوى القضاء الجنائى
                    </div>
                    <div x-show="activeSubSubTab === 'subsubtab3'">
                        محتوى القضاء الشرعى
                    </div>
                    <div x-show="activeSubSubTab === 'subsubtab4'">
                        محتوى قرارات قضائية 
                    </div>
                    <div x-show="activeSubSubTab === 'subsubtab5'">
                        محتوى النيابة العامة 
                    </div>
                </div>
            </div>

            <!-- Sub-sub-tabs for معهد القضاء -->
            <div x-show="activeSubTab === 'subtab3'" class="mt-4" style="margin-top:3rem;">
                <x-filament::tabs>
                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab4'"
                        wire:click="setActiveSubSubTab('subsubtab4')">
                        <x-slot name="label">
                            محاضرات
                        </x-slot>
                        محاضرات
                    </x-filament::tabs.item>

                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab5'"
                        wire:click="setActiveSubSubTab('subsubtab5')">
                        <x-slot name="label">
                            امتحانات
                        </x-slot>
                        امتحانات
                    </x-filament::tabs.item>

                    <x-filament::tabs.item 
                        :active="$activeSubSubTab === 'subsubtab6'"
                        wire:click="setActiveSubSubTab('subsubtab6')">
                        <x-slot name="label">
                            شؤون فنية
                        </x-slot>
                        شؤون فنية
                    </x-filament::tabs.item>
                </x-filament::tabs>

                <div class="mt-4" style="margin-top:3rem;">
                    <div x-show="activeSubSubTab === 'subsubtab4'">
                        محتوى المحاضرات
                    </div>
                    <div x-show="activeSubSubTab === 'subsubtab5'">
                        محتوى الامتحانات
                    </div>
                    <div x-show="activeSubSubTab === 'subsubtab6'">
                        محتوى الشؤون الفنية
                    </div>
                </div>
            </div>
        </div>

        <!-- section2 ma7kama olia -->
        <div x-show="activeMainTab === 'tab2'" class="mt-4" style="margin-top:3rem;">
            <x-filament::tabs>
                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab1'"
                    wire:click="setActiveSubTab('subtab1')">
                    <x-slot name="label">
                        مشروعات الاحكام
                    </x-slot>
                    مشروعات الاحكام
                </x-filament::tabs.item>

                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab2'"
                    wire:click="setActiveSubTab('subtab2')">
                    <x-slot name="label">
                       من قضاء المحكمة العليا 
                    </x-slot>
                    من قضاء المحكمة العليا 
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
        </div>
        <!-- section3 modawana-->

        <div x-show="activeMainTab === 'tab3'" class="mt-4" style="margin-top:3rem;">
            <x-filament::tabs>
                <x-filament::tabs.item 
                    :active="$activeSubTab === 'subtab1'"
                    wire:click="setActiveSubTab('subtab1')">
                    <x-slot name="label">
                         مباحث
                    </x-slot>
                     مباحث
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
                         اسلاميات  
                    </x-slot>
                     اسلاميات                
                </x-filament::tabs.item>
            </x-filament::tabs>
       
<!--third menu for modawana-->
    <div x-show="activeSubTab === 'subtab1'" class="mt-4" style="margin-top:3rem;">
                    <x-filament::tabs>
                        <x-filament::tabs.item 
                            :active="$activeSubSubTab === 'subsubtab1'"
                            wire:click="setActiveSubSubTab('subsubtab1')">
                            <x-slot name="label">
                             حقوق الانسان 
                            </x-slot>
                             حقوق الانسان
                        </x-filament::tabs.item>

                    <x-filament::tabs.item 
                            :active="$activeSubSubTab === 'subsubtab2'"
                            wire:click="setActiveSubSubTab('subsubtab2')">
                            <x-slot name="label">
                                 قانونية
                            </x-slot>
                             قانونية
                        </x-filament::tabs.item> 
                        <x-filament::tabs.item 
                            :active="$activeSubSubTab === 'subsubtab3'"
                            wire:click="setActiveSubSubTab('subsubtab3')">
                            <x-slot name="label">
                                 متنوعة
                            </x-slot>
                             متنوعة
                        </x-filament::tabs.item> 
                    </x-filament::tabs>
                    </div>
                    <div x-show="activeSubTab === 'subtab2'" class="mt-4" style="margin-top:3rem;">
                    <x-filament::tabs>
                        <x-filament::tabs.item 
                            :active="$activeSubSubTab === 'subsubtab1'"
                            wire:click="setActiveSubSubTab('subsubtab1')">
                            <x-slot name="label">
                              سلسلة دربال للكتب الصوتية 
                            </x-slot>
                             سلسلة دربال للكتب الصوتية
                        </x-filament::tabs.item>

                    <x-filament::tabs.item 
                            :active="$activeSubSubTab === 'subsubtab2'"
                            wire:click="setActiveSubSubTab('subsubtab2')">
                            <x-slot name="label">
                                 قبس من كتاب
                            </x-slot>
                             قبس من كتاب
                        </x-filament::tabs.item> 
                       
                    </x-filament::tabs>
                    </div>
    </div>
</x-filament::page>