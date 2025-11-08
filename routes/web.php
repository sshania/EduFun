<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/aboutus', function(){
    return view('aboutus');
})->name("aboutus");

Route::get('writers', [WriterController::class, 'index'])->name("writers");

Route::get('popular', function () {
    return view('popular');
})->name("popular");

Route::prefix('/category')->group(function () {

    Route::get('/', )->name('category');

    Route::get('SoftwareEngineering', [UserController::class, 'index'])->name('category.softwareEngineering');
    Route::get('InteractiveMultimedia', [UserController::class, 'index'])->name('category.interactiveMultimedia');

});