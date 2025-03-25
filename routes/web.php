<?php

use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::namespace('Main')->name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
});
