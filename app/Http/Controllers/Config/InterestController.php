<?php

namespace App\Http\Controllers\Config;

use App\Enums\InterestTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\InterestCreateRequest;
use App\Models\Configuration\InterestConfig;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InterestController extends Controller
{
    public function index()
    {
        session()->put('menuActive', 'configuration');
        session()->put('subNavActive', 'interest');

        return Inertia::render('configuration/interest/index');
    }

    public function create()
    {
        session()->put('menuActive', 'configuration');
        session()->put('subNavActive', 'interest');

        return Inertia::render('configuration/interest/create');
    }

    public function store(InterestCreateRequest $request)
    {
        $config = new InterestConfig();
        $config->type = $request->enum('type', InterestTypeEnum::class);
        $config->percentage = $request->percentage;
        $config->created_by = $request->user()->id;
        $config->updated_by = $request->user()->id;

        if ($config->save()) {
            return redirect()->route('config.interest.index')->with('success', 'Interest percentage created successfully!');
        }  else {
            return redirect()->back()->with('error', 'Failed to create interest percentage!');
        }
    }
}
