<?php

use App\Filament\Resources\QuoteResource\Pages\ListQuotes;
use App\Filament\Resources\SectionResource;
use App\Filament\Resources\BranchResource;
use App\Filament\Resources\ItemResource;
use App\Filament\Resources\ContentResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

Route::get('/', function () {
    return view('homePage.layout');
});
Route::get('/test', function () {
    return view('homePage.test');
});
Route::get('/favorite', function () {
    return view('homePage.favorite');
})->name('favorite');

Route::get('/court', function () {
    return view('judgment.court');
});

Route::get('/inst', function () {
    return view('judgment.judgeInst');
});

Route::get('/niaba', function () {
    return view('judgment.publicNiaba');
});

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/likes', [LikeController::class, 'store'])->name('likes.store');

Route::middleware(['auth', 'filament'])->group(function () {
    Route::get('/admin/section', [SectionResource::class, 'index'])->name('admin.sections');
    Route::get('/admin/branchs', [BranchResource::class, 'index'])->name('admin.branches');
    Route::get('/admin/itms', [ItemResource::class, 'index'])->name('admin.items');
    Route::get('/admin/quote', ListQuotes::class)->name('admin.quotes.index');
});

