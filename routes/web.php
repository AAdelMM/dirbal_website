<?php

use App\Filament\Resources\QuoteResource\Pages\ListQuotes;
use App\Filament\Resources\SectionResource;
use App\Filament\Resources\BranchResource;
use App\Filament\Resources\ItemResource;
use App\Filament\Resources\ContentResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MainHeroController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Ma7kamaOliaPreviewController;


Route::get('/', function () {
    return view('homePage.layout');
});

Route::get('/mainHero/quotes', [MainHeroController::class, 'getQuotes']);


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
Route::get('/islamyat', function () {
    return view('blog.islamyat');
});
Route::get('/kitab', function () {
    return view('blog.kitab');
});
Route::get('/mabahith', function () {
    return view('blog.mabahith');
});

Route::get('/a7kam', function () {
    return view('highCourt.a7kam');
});

/* Route::get('/a7kam_preview', function () {
    return view('highCourt.a7kam_preview');
}); */

use Illuminate\Support\Facades\DB;

Route::get('/highCourt/a7kam/{id}/preview', function($id) {
    $decision = DB::table('ma7kama_olia')->where('id', $id)->first();
    
    if (!$decision) {
        abort(404);
    }
    
    return view('highCourt.a7kam_preview', compact('decision'));
})->name('highCourt.a7kam.preview');

Route::get('/montaqa', function () {
    return view('highCourt.montaqa');
});
Route::get('/shoon', function () {
    return view('highCourt.shoon');
});
/////////////////////////////
// Preview Routes for Dynamic Categories
Route::get('/preview/{category}/{id}', function($category, $id) {
   // Remove the prefix letter from the ID
   $cleanId = substr($id, 1);
   
    switch($category) {
        case 'مقالة':
            $article = DB::table('makalat_3ama')->where('id', $cleanId)->first();
            if (!$article) {
                abort(404);
            }
            return view('previewPages.articleShow', compact('article'));
        
        case 'كتاب صوتى':
            $audio = DB::table('kitab_sawty')->where('id', $cleanId)->first();
            if (!$audio) {
                abort(404);
            }
            return view('previewPages.audioShow', compact('audio'));
        
        case 'مشروع احكام':
            $decision = DB::table('mashro3_a7kam')->where('id', $cleanId)->first();
            if (!$decision) {
                abort(404);
            }
            return view('previewPages.a7kamShow', compact('decision'));
        
        default:
            $decision = DB::table('mashro3_a7kam')->where('id', $cleanId)->first();
            if (!$decision) {
                abort(404);
            }
            return view('highCourt.a7kam_preview', compact('decision'));
    }
})->name('dynamic.preview');
////////////////////////////
//view buttons
Route::get('/articles/{article}/view', [ArticleController::class, 'view'])->name('articles.view');


Route::get('/ma7kama-olia/{ma7kamaOlia}/preview', [Ma7kamaOliaPreviewController::class, 'preview'])
    ->name('ma7kama-olia.preview');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/like', [LikeController::class, 'store'])->name('likes.store');

Route::middleware(['auth', 'filament'])->group(function () {
    Route::get('/admin/section', [SectionResource::class, 'index'])->name('admin.sections');
    Route::get('/admin/branchs', [BranchResource::class, 'index'])->name('admin.branches');
    Route::get('/admin/itms', [ItemResource::class, 'index'])->name('admin.items');
    Route::get('/admin/quote', ListQuotes::class)->name('admin.quotes.index');
});

