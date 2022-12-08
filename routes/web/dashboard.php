<?php

use App\Http\Controllers\Home\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles' => ['admin', 'account', 'user']
], function () {
    Route::name('dashboard.')->prefix('admin')->middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('index');
    });
});
