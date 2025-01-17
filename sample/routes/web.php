<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
