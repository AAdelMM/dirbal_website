<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use Filament\Widgets\ChartWidget;

class CommentChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
