<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');

Route::post('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [PageController::class, 'dashboardPage'])->name('dashboard.page');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');