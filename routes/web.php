<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Contacts\ContactsController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Service\ServiceController;
use Illuminate\Support\Facades\Route;

Route::namespace('Main')->name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
});

Route::namespace('About')->name('about.')->group(function () {
    Route::get('/about', [AboutController::class, 'index'])->name('index');
});

Route::namespace('Blog')->name('blog.')->group(function () {
    Route::get('/blog', [BlogController::class, 'index'])->name('index');
    Route::get('/blog/{id}/show', [BlogController::class, 'show'])->name('show');
});

Route::namespace('Service')->name('service.')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('index');
});

Route::namespace('Contacts')->name('contacts.')->group(function () {
    Route::get('/contacts', [ContactsController::class, 'index'])->name('index');
});
