<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasExtraAlpineAttributes;

class CustomRichEditor extends RichEditor
{
    use HasExtraInputAttributes;
    use HasExtraAlpineAttributes;

    public function setUp(): void
    {
        parent::setUp();

        $this->extraInputAttributes(['class' => 'custom-rich-editor']);
        
        $this->extraAlpineAttributes([
            '@tiptap-ready' => 'function (Alpine, editor) {
                // يمكنك إضافة أي تخصيصات إضافية هنا
                editor.registerPlugin(TextColorPlugin);
                editor.registerPlugin(FontSizePlugin);
            }',
        ]);
    }

    public function getToolbarButtons(): array
    {
        return [
            'bold',
            'italic',
            'underline',
            'strike',
            'link',
            'orderedList',
            'unorderedList',
            'h2',
            'h3',
            'paragraph',
            'blockquote',
            'codeBlock',
            'undo',
            'redo',
            'alignLeft',
            'alignCenter',
            'alignRight',
            'alignJustify',
            'textColor',
            'fontSize',
        ];
    }

    /* public static function make(string $name): static
    {
        return parent::make($name)
            ->toolbarButtons(static::getToolbarButtons());
    } */
}