<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/register', function () {
    return view('content.auth.register');
})->name('register');

Route::get('/reset-password', function () {
    return view('content.auth.recovery');
})->name('reset');

Route::get('/change-password', function () {
    return view('content.auth.change');
})->name('change');

Route::get('/messages', function () {
    return view('content.message.message');
});
