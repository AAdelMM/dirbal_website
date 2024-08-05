<button
    type="button"
    x-data="{ isOpen: false, color: '' }"
    @click="isOpen = !isOpen"
    class="text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-indigo-500 rounded-lg p-2 relative"
    title="لون النص"
>
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
    <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-10 mt-2 w-40 bg-white rounded-md shadow-lg">
        <div class="p-2 grid grid-cols-5 gap-2">
            @foreach(['red', 'blue', 'green', 'yellow', 'purple'] as $color)
                <button
                    type="button"
                    @click="color = '{{ $color }}'; $wire.execute('editor.chainCommands', { commands: [{ method: 'setColor', args: ['{{ $color }}'] }] }); isOpen = false"
                    class="w-6 h-6 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    style="background-color: {{ $color }}"
                ></button>
            @endforeach
        </div>
    </div>
</button>