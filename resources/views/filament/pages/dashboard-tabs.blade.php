
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

                <div class="mt-4 font-default" style="margin-top:3rem; font-family:unset;">
                    
              <!-- Tab for القضاء المدني -->
                <div x-show="activeSubSubTab === 'subsubtab1'">
                    <h2 style="margin-bottom:20px;">محتوى القضاء المدني</h2>
                    @if($contentCivilJudiciary->isNotEmpty())
                        <table class="w-full bg-black border border-gray-200">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                    <th class="py-2 px-4 border-b">التصنيف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contentCivilJudiciary as $item)
                                    <tr>
                                        <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>لايوجد محتوى حاليا للقضاء المدني.</p>
                    @endif
                </div>

                    <!-- Tab for القضاء الجنائى -->
                    <div x-show="activeSubSubTab === 'subsubtab2'">
                        <h2 style="margin-bottom:20px;">محتوى القضاء الجنائى</h2>
                        @if($contentCriminalJudiciary->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentCriminalJudiciary as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى القضاء الجنائى.</p>
                        @endif
                    </div>

                    <div x-show="activeSubSubTab === 'subsubtab3'">

                    <h2 style="margin-bottom:20px;">محتوى القضاء الشرعى</h2>
                        @if($contentShar3y ->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentShar3y  as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى القضاء الشرعى.</p>
                        @endif
                    </div>

                    <div x-show="activeSubSubTab === 'subsubtab4'">
                       
                    <h2 style="margin-bottom:20px;">محتوى القرارات القضائية</h2>
                        @if($contentKada2y ->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentKada2y  as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى القؤاؤات القضائية .</p>
                        @endif
                    </div>

                   
                    <div x-show="activeSubSubTab === 'subsubtab5'">
                    
                    <h2 style="margin-bottom:20px;">محتوى القضاء الجنائى</h2>
                        @if($contentNiabh->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentNiabh as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى القضاء الجنائى.</p>
                        @endif
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
                   
                    <h2 style="margin-bottom:20px;">محتوى المحاضرات</h2>
                        @if($contentm7adrat->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentm7adrat as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى للمحاضرات.</p>
                        @endif
                    </div>

                    <div x-show="activeSubSubTab === 'subsubtab5'">

                        <h2 style="margin-bottom:20px;">محتوى الامتحانات</h2>
                        @if($contenemt7anat->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contenemt7anat as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى للامتحانات.</p>
                        @endif
                    </div>

                    <div x-show="activeSubSubTab === 'subsubtab6'">
                      
                    <h2 style="margin-bottom:20px;">محتوى الشؤون الفنية</h2>
                        @if($contentsh2oon->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentsh2oon as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى للشؤون الفنية.</p>
                        @endif
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
<!--مشروعات الاحكام-->
            <div x-show="activeSubTab === 'subtab1'" class="mt-4" style="margin-top:3rem;">
                
             <h2 style="margin-bottom:20px;">محتوى مشروعات الاحكام</h2>
                        @if($contentA7kam->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentA7kam as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى لمشروعات الاحكام.</p>
                        @endif
                    </div>

       
        <!--من قضاء المحكمة العليا-->
        <div x-show="activeSubTab === 'subtab2'" class="mt-4" style="margin-top:3rem;">
                
         <h2 style="margin-bottom:20px;">محتوى قضاء ابمحكمة العليا</h2>
                        @if($contentOlia->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentOlia as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى لقضاء المحكمة العليا.</p>
                        @endif
                    </div>

        
        <!-- شؤون فنية-->
        <div x-show="activeSubTab === 'subtab3'" class="mt-4" style="margin-top:3rem;">
                
         <h2 style="margin-bottom:20px;">محتوى الشؤون الفنية</h2>
                        @if($contentsh2oon1->isNotEmpty())
                            <table class="w-full bg-black border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                        <th class="py-2 px-4 border-b">التصنيف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contentsh2oon1 as $item)
                                        <tr>
                                            <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                            <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>لايوجد  محتوى فى الوقت الحالى للشؤون الفنية.</p>
                        @endif
                    </div>

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
<!--محتوى الاسلاميات-->
            <div x-show="activeSubTab === 'subtab3'" class="mt-4" style="margin-top:3rem;">
                
                <h2 style="margin-bottom:20px;">محتوى الاسلاميات</h2>
                               @if($contentIslamyat->isNotEmpty())
                                   <table class="w-full bg-black border border-gray-200">
                                       <thead>
                                           <tr>
                                               <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                               <th class="py-2 px-4 border-b">التصنيف</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($contentIslamyat as $item)
                                               <tr>
                                                   <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                                   <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                               </tr>
                                           @endforeach
                                       </tbody>
                                   </table>
                               @else
                                   <p>لايوجد  محتوى فى الوقت الحالى للاسلاميات.</p>
                               @endif
                           </div>

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
<!--محتوى حقوق الانسان-->
                    <div x-show="activeSubSubTab === 'subsubtab1'" >
                      
                      <h2 style="margin-bottom:20px; ">محتوى حقوق الانسان</h2>
                          @if($contentInsan->isNotEmpty())
                              <table class="w-full bg-black border border-gray-200">
                                  <thead>
                                      <tr>
                                          <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                          <th class="py-2 px-4 border-b">التصنيف</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($contentInsan as $item)
                                          <tr>
                                              <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                              <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          @else
                              <p>لايوجد  محتوى فى الوقت الحالى  لحقوق الانسان.</p>
                          @endif
                      </div>

                      <!--محتوى  قانونية-->
                    <div x-show="activeSubSubTab === 'subsubtab2'" >
                      
                      <h2 style="margin-bottom:20px; ">محتوى  قانونية</h2>
                          @if($contentKanony->isNotEmpty())
                              <table class="w-full bg-black border border-gray-200">
                                  <thead>
                                      <tr>
                                          <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                          <th class="py-2 px-4 border-b">التصنيف</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($contentKanony as $item)
                                          <tr>
                                              <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                              <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          @else
                              <p>لايوجد  محتوى فى الوقت الحالى   قانونية.</p>
                          @endif
                      </div>

                        <!--محتوى  قانونية-->
                    <div x-show="activeSubSubTab === 'subsubtab3'" >
                      
                      <h2 style="margin-bottom:20px; ">محتوى  متنوعة</h2>
                          @if($contentMtnw3->isNotEmpty())
                              <table class="w-full bg-black border border-gray-200">
                                  <thead>
                                      <tr>
                                          <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                          <th class="py-2 px-4 border-b">التصنيف</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($contentMtnw3 as $item)
                                          <tr>
                                              <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                              <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          @else
                              <p>لايوجد  محتوى فى الوقت الحالى   متنوعة.</p>
                          @endif
                      </div>

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

                    <!--محتوى سلسلة دربال -->
                    <div x-show="activeSubSubTab === 'subsubtab1'" >
                      
                      <h2 style="margin-bottom:20px; ">محتوى سلسلة دربال</h2>
                          @if($contentSelsela->isNotEmpty())
                              <table class="w-full bg-black border border-gray-200">
                                  <thead>
                                      <tr>
                                          <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                          <th class="py-2 px-4 border-b">التصنيف</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($contentSelsela as $item)
                                          <tr>
                                              <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                              <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          @else
                              <p>لايوجد  محتوى فى الوقت الحالى  لسلسلة دربال.</p>
                          @endif
                      </div>

                        <!--محتوى قبس من كتاب  -->
                    <div x-show="activeSubSubTab === 'subsubtab2'" >
                      
                      <h2 style="margin-bottom:20px; ">محتوى قبس من كتاب </h2>
                          @if($contentKabas ->isNotEmpty())
                              <table class="w-full bg-black border border-gray-200">
                                  <thead>
                                      <tr>
                                          <th class="py-2 px-4 border-b" style="border-left: 2px solid grey;">عنوان مختصر</th>
                                          <th class="py-2 px-4 border-b">التصنيف</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($contentKabas  as $item)
                                          <tr>
                                              <td class="py-2 px-4 border-b" style="border-left: 2px solid grey;">{{ $item['title'] ?? 'No Title' }}</td>
                                              <td class="py-2 px-4 border-b">{{ $item['table'] ?? 'No Table' }}</td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          @else
                              <p>لايوجد  محتوى فى الوقت الحالى  قبس من كتاب .</p>
                          @endif
                      </div>

                    </div>
    </div>
</x-filament::page>