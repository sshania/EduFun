<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;

Route::get("/", [ArticleController::class, 'get3Article'])->name("home");

Route::get('/aboutus', function(){
    return view('aboutus');
})->name("aboutus");

Route::get('writers', [WriterController::class, 'index'])->name("writers");

Route::get('popular', function () {
    return view('popular');
})->name("popular");

Route::get('/articlesByWriter/{id}', [ArticleController::class, 'getArticleByWriter'])->name('article.byWriter');

Route::get('/articles/{id}', [ArticleController::class, 'details'])->name('article.details');


Route::prefix('/category')->group(function () {

    Route::get('/', )->name('category');

    Route::get('SoftwareEngineering', [UserController::class, 'index'])->name('category.softwareEngineering');
    Route::get('InteractiveMultimedia', [UserController::class, 'index'])->name('category.interactiveMultimedia');

});