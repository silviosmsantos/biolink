<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', fn() => 'dashboard :: '. auth()->id())->name('dashboard');