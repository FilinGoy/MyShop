<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\PackagingType;
use Illuminate\Http\Request;

class PackagingTypeController extends Controller
{
        // index | - create | store | edit | show | update | delete
    public function index()
    {
        $types = PackagingType::all();
        return view('admin.packaging_type.index', compact('types'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        PackagingType::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(PackagingType $type)
    {
        return view('admin.packaging_type.edit', compact('type'));
    }

    public function show(PackagingType $type)
    {
        return view('admin.packaging_type.show', compact('type'));
    }

    public function update(UpdateRequest $request, PackagingType $type)
    {
        $data = $request->validated();
        $type->update($data);

        return view('admin.packaging_type.show', compact('type'));
    }

    public function delete(PackagingType $type)
    {
        $type->delete();

        return redirect()->route('packaging.index');
    }
}
