<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(): object
    {
        Session::put('menuActive', 'dashboard');
        return Inertia::render('home/dashboard');
    }
}
