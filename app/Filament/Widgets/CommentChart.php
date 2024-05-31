<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CommentChart extends ChartWidget
{
    protected static ?string $heading = 'رسم بيانى';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'عدد التعليقات ',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'borderColor' => '#9BD0F5', //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
