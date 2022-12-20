<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(): object
    {
        session()->put('subNavActive', '');
        session()->put('menuActive', 'dashboard');
        return Inertia::render('home/dashboard');
    }
}
