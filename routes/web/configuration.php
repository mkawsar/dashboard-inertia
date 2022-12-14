<?php

use App\Http\Controllers\Config\ConfigurationController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles' => ['admin'],
    'prefix' => 'admin'
], function () {
    Route::name('config.')->prefix('configuration')->group(function () {
        Route::get('index', [ConfigurationController::class, 'index'])->name('index');
    });
});