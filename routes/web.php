<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home-layout');
});
Route::get('/dashboard', function () {
    return view('home-layout');
});
