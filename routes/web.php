<?php

use App\Filament\Resources\QuoteResource\Pages\ListQuotes;
use App\Filament\Resources\SectionResource;
use App\Filament\Resources\BranchResource;
use App\Filament\Resources\ItemResource;
use App\Filament\Resources\ContentResource;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('uc');
});




Route::middleware(['auth', 'filament'])->group(function () {
    Route::get('/admin/section', [SectionResource::class, 'index'])->name('admin.sections');
    Route::get('/admin/branchs', [BranchResource::class, 'index'])->name('admin.branches');
    Route::get('/admin/itms', [ItemResource::class, 'index'])->name('admin.items');
    Route::get('/admin/quote', ListQuotes::class)->name('admin.quotes.index');
});

