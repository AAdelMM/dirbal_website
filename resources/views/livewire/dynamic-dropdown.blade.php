
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div>
    <label for="section">Select Section:</label>
    <select wire:model="selectedSection" id="section" class="block w-full mt-1">
        <option value="">Select Section</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
        @endforeach
    </select>

    @if(!is_null($selectedSection))
        <label for="branch" class="mt-4">Select Branch:</label>
        <select wire:model="selectedBranch" id="branch" class="block w-full mt-1">
            <option value="">Select Branch</option>
            @foreach($branches as $branch)
                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
            @endforeach
        </select>
    @endif

    @if(!is_null($selectedBranch) && count($items) > 0)
        <label for="item" class="mt-4">Select Item:</label>
        <select wire:model="selectedItem" id="item" class="block w-full mt-1">
            <option value="">Select Item</option>
            @foreach($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    @endif

    @if(!is_null($selectedItem))
        <table class="mt-4 w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->where('id', $selectedItem) as $item)
                    <tr>
                        <td class="border p-2">{{ $item->name }}</td>
                        <td class="border p-2">{{ $item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @elseif(!is_null($selectedBranch) && count($items) === 0)
        <div class="mt-4">
            <strong>No items available for this branch.</strong>
        </div>
    @endif
</div>


