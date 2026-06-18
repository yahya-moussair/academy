<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GetClassesDataController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get("/classes",[GetClassesDataController::class, "getClasses"]);

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::get('/callback/{code}', [AuthController::class, 'loginCallback']);







require __DIR__.'/settings.php';
