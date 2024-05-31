<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class LikesChart extends ChartWidget
{
    protected static ?string $heading = 'رسم بيانى';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'عدد الاعجابات ',
                    'data' => [0, 10, 20, 2, 21, 90, 45, 30, 65, 45, 77, 10],
                ],
            ],
            'backgroundColor' => '#fff',
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],//
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
