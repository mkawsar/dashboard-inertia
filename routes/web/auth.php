<?php

use App\Http\Controllers\Authentication\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login'])->name('login');
