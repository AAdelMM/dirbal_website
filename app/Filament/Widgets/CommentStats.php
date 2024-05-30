<?php

namespace App\Filament\Widgets;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Content;
use Filament\Widgets\Widget;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CommentStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            'totalComments' => Comment::count(),
            'totalLikes' => Like::count(),
            'totalContents' => Content::count(), //
        ];
    }
}
