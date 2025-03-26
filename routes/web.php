<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Service\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::namespace('Main')->name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
});

Route::namespace('Blog')->name('blog.')->group(function () {
    Route::get('/blog', [BlogController::class, 'index'])->name('index');
    Route::get('/blog/{id}/show', [BlogController::class, 'show'])->name('show');
});

Route::namespace('Service')->name('service.')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('index');
});
