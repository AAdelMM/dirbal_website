<?php

use App\Filament\Resources\QuoteResource\Pages\ListQuotes;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('uc');
});


Route::get('/admin/quote', ListQuotes::class)->name('admin.quotes.index');