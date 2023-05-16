<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\Position;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('admin.position.index', compact('positions'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Position::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(Position $position)
    {
        return view('admin.position.edit', compact('position'));
    }

    public function show(Position $position)
    {
        return view('admin.position.show', compact('position'));
    }

    public function update(UpdateRequest $request, Position $position)
    {
        $data = $request->validated();
        $position->update($data);

        return view('admin.position.show', compact('position'));
    }

    public function delete(Position $position)
    {
        $position->delete();

        return redirect()->route('position.index');
    }
}
