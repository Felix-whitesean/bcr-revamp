<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicContentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

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

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/title/update', [DynamicContentController::class, 'updateTitleContent'])->name('title.update');

Route::get('/send-test-email', function () {
    Mail::to('dailystar.co.ke@gmail.com')->send(new Email());
    return 'Test email sent!';
});

Route::get('/emails', [EmailController::class, 'fetchEmails'])->name('email.index');