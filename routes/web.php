<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BioLinkController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group( function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group( function() {
    Route::get('/logout', LogoutController::class)->name('logout');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    //Links
    Route::get('links/create', [LinkController::class, 'create'])->name('links.create');
    Route::post('links/create', [LinkController::class, 'store'])->name('links.store');
    
    Route::prefix('links')->middleware('can:manage,link')->group(function() {
        Route::get('{link}/edit', [LinkController::class, 'edit'])->name('links.edit');
        Route::put('{link}/edit', [LinkController::class, 'update']);
        Route::delete('{link}', [LinkController::class, 'destroy'])->name('links.destroy');
        Route::patch('{link}/up', [LinkController::class, 'up'])->name('links.up');
        Route::patch('{link}/down', [LinkController::class, 'down'])->name('links.down');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('users.profile');
    Route::put('/profile', [ProfileController::class, 'update']);
    
});

Route::get('/{user:handler}', BioLinkController::class);