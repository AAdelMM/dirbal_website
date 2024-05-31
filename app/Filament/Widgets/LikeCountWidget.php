<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LikeCountWidget extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('عدد ', '3.2K')
            ->description('32k زيادة')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('زائرين غير متفاعلين', '21%')
            ->description('7% قلت')
            ->color('danger')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('متوسط مشاهدة الصفحة', '5%')
            ->description('3% زيادة')
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),//
        ];
    }
}

