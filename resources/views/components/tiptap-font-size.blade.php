<x-filament-tiptap-editor::button
    label="Font Size"
    active="customFontSize"
    action="editor().commands.setFontSize"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M5.12 14L7.5 7.67L9.87 14M6.5 5L1 19h2.25l1.12-3h6.25l1.13 3h2.25L9 5H6.5Z"/></svg>
    <span class="sr-only">{{ $label }}</span>
</x-filament-tiptap-editor::button>