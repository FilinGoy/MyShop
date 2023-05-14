<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\WeightType;

class WeightTypeController extends Controller
{
    public function index()
    {
        $types = WeightType::all();
        return view('admin.weight_type.index', compact('types'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        WeightType::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(WeightType $type)
    {
        return view('admin.weight_type.edit', compact('type'));
    }

    public function show(WeightType $type)
    {
        return view('admin.weight_type.show', compact('type'));
    }

    public function update(UpdateRequest $request, WeightType $type)
    {
        $data = $request->validated();
        $type->update($data);

        return view('admin.weight_type.show', compact('type'));
    }

    public function delete(WeightType $type)
    {
        $type->delete();

        return redirect()->route('weight.index');
    }
}
