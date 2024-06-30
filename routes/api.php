<?php

use App\Filament\Resources\QuoteResource;

Route::get('/quotes', [QuoteResource::class, 'homePage.mainHero']);

