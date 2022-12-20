<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\InterestCreateRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InterestController extends Controller
{
    public function index()
    {
        session()->put('menuActive', 'configuration');
        session()->put('subNavActive', 'app');

        return Inertia::render('configuration/index');
    }

    public function create()
    {
        session()->put('menuActive', 'configuration');
        session()->put('subNavActive', 'app');

        return Inertia::render('configuration/interest/create');
    }

    public function store(InterestCreateRequest $request)
    {
        return $request->all();
    }
}
