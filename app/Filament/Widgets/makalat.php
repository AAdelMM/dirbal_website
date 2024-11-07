<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use Illuminate\Support\Facades\DB;

class ArticlesChart extends BarChartWidget
{
    protected static ?string $heading = 'إحصائيات المقالات';

    protected function getData(): array
    {
        // Get total articles count
        $totalArticles = DB::table('makalat_3ama')->count();

        // Count of updated articles
        $updatedArticlesCount = DB::table('makalat_3ama')->whereNotNull('updated')->count();

        return [
            'datasets' => [
                [
                    'label' => 'عدد المقالات',
                    'data' => [$totalArticles],
                    'backgroundColor' => '#6b7280',
                ],
                [
                    'label' => 'المقالات المحدثة',
                    'data' => [$updatedArticlesCount],
                    'backgroundColor' => '#10b981',
                ],
            ],
            'labels' => ['إحصائيات'],
        ];
    }
}
