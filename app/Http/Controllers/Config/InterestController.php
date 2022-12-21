<?php

namespace App\Http\Controllers\Config;

use App\Enums\InterestTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Configuration\InterestCreateRequest;
use App\Models\Configuration\InterestConfig;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class InterestController extends Controller
{
    public function index()
    {
        session()->put('menuActive', 'configuration');
        session()->put('subNavActive', 'interest');

        $interests = InterestConfig::query()
            ->with('creator:id,name')
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->paginate(2)
            ->withQueryString();

        return Inertia::render('configuration/interest/index', [
            'configs' => $interests,
            'filter' => Request::only(['search'])
        ]);
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
