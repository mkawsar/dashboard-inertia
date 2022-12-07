<?php

use App\Http\Controllers\Authentication\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('authenticate', [LoginController::class, 'authenticate'])->name('login');
});
