<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\TimeType;

class TimeTypeController extends Controller
{
    public function index()
    {
        $types = TimeType::all();
        return view('admin.time_type.index', compact('types'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        TimeType::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(TimeType $type)
    {
        return view('admin.time_type.edit', compact('type'));
    }

    public function show(TimeType $type)
    {
        return view('admin.time_type.show', compact('type'));
    }

    public function update(UpdateRequest $request, TimeType $type)
    {
        $data = $request->validated();
        $type->update($data);

        return view('admin.time_type.show', compact('type'));
    }

    public function delete(TimeType $type)
    {
        $type->delete();

        return redirect()->route('time.index');
    }
}
