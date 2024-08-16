<x-filament-tiptap-editor::button
    label="Font Family"
    active="customFontFamily"
    action="editor().commands.setFontFamily"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.62 12L12 5.67L14.37 12M11 3L5.5 17h2.25l1.12-3h6.25l1.13 3h2.25L13 3h-2Z"/></svg>
    <span class="sr-only">{{ $label }}</span>
</x-filament-tiptap-editor::button>