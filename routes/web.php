<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicContentController;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home-layout');
});
Route::get('/dashboard', function () {
    return view('home-layout');
});

Route::post('/update-tag', [DynamicContentController::class, 'update'])->name('tag.update');
Route::post('/content/update', [DynamicContentController::class, 'updateContent'])->name('content.update');
Route::post('/title/update', [DynamicContentController::class, 'updateTitleContent'])->name('title.update');