<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicContentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\Email;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    return view('home-layout');
})->name('dashboard');

Route::get('/home', function () {
    return view('home-layout');
});
Route::post('/update-tag', [DynamicContentController::class, 'update'])->name('tag.update');

Route::post('/content/update', [DynamicContentController::class, 'updateContent'])->name('content.update');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/title/update', [DynamicContentController::class, 'updateTitleContent'])->name('title.update');

Route::get('/send-test-email', function () {
    Mail::to('dailystar.co.ke@gmail.com')->send(new Email());
    return 'Test email sent!';
});

Route::get('/emails', [EmailController::class, 'fetchEmails'])->name('email.index');