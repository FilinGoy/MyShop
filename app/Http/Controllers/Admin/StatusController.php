<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('admin.status.index', compact('statuses'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Status::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(Status $status)
    {
        return view('admin.status.edit', compact('status'));
    }

    public function show(Status $status)
    {
        return view('admin.status.show', compact('status'));
    }

    public function update(UpdateRequest $request, Status $status)
    {
        $data = $request->validated();
        $status->update($data);

        return view('admin.status.show', compact('status'));
    }

    public function delete(Status $status)
    {
        $status->delete();

        return redirect()->route('status.index');
    }
}
