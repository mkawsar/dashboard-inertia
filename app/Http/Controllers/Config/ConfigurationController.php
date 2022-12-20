<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConfigurationController extends Controller
{
    public function application()
    {
        session()->put('menuActive', 'configuration');
        session()->put('subNavActive', 'application');
        return Inertia::render('configuration/application');
    }
}
