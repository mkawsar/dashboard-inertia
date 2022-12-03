<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{
    /**
     * @return object
     */
    public function login(): object
    {
        if (!Auth::check()) {
            return Inertia::render('auth/login');
        } else {
            return redirect()->route('dashboard.index');
        }
    }
}
