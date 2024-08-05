<button
    type="button"
    x-data="{ isOpen: false, size: '' }"
    @click="isOpen = !isOpen"
    class="text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-indigo-500 rounded-lg p-2 relative"
    title="حجم الخط"
>
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
    <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-10 mt-2 w-40 bg-white rounded-md shadow-lg">
        <div class="p-2">
            @foreach(['8px', '10px', '12px', '14px', '16px', '18px', '20px'] as $fontSize)
                <button
                    type="button"
                    @click="size = '{{ $fontSize }}'; $wire.execute('editor.chainCommands', { commands: [{ method: 'setFontSize', args: ['{{ $fontSize }}'] }] }); isOpen = false"
                    class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                >
                    {{ $fontSize }}
                </button>
            @endforeach
        </div>
    </div>
</button>