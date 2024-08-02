<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\View\ComponentAttributeBag;

class TinyMceEditor extends Field
{
    protected string $view = 'components.tinymce-editor';

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(function (TinyMceEditor $component, $state): void {
            $component->state($state);
        });

        $this->dehydrateStateUsing(fn ($state) => $state);
    }
}
