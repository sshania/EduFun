<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::get("/", [ArticleController::class, 'get3Article'])->name("home");

Route::get('/aboutus', function(){
    return view('aboutus');
})->name("aboutus");

Route::get('writers', [WriterController::class, 'index'])->name("writers");
Route::get('popular', [ArticleController::class, 'pagenation'])->name("popular");

Route::get('/articlesByWriter/{id}', [ArticleController::class, 'getArticleByWriter'])->name('article.byWriter');
Route::get('/articles/{id}', [ArticleController::class, 'details'])->name('article.details');


Route::prefix('/category')->group(function () {

    Route::get('/', [ArticleController::class, 'index'] )->name('category');

    Route::get('/{id}', [ArticleController::class, 'getArticleByCat'])->name('articleByCategory');
    
});