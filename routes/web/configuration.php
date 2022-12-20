<?php

use App\Http\Controllers\Config\ConfigurationController;
use App\Http\Controllers\Config\InterestController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles' => ['admin'],
    'prefix' => 'admin'
], function () {
    Route::name('config.')->prefix('configuration')->group(function () {
        Route::get('application', [ConfigurationController::class, 'application'])->name('application');
        Route::prefix('interest')->name('interest.')->group(function () {
            Route::get('index', [InterestController::class, 'index'])->name('index');
            Route::get('create', [InterestController::class, 'create'])->name('create');
            Route::post('store', [InterestController::class, 'store'])->name('store');
        });
    });
});