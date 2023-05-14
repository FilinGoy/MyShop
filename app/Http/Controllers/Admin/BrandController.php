<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Brand::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function show(Brand $brand)
    {
        return view('admin.brand.show', compact('brand'));
    }

    public function update(UpdateRequest $request, Brand $brand)
    {
        $data = $request->validated();
        $brand->update($data);

        return view('admin.brand.show', compact('brand'));
    }

    public function delete(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brand.index');
    }
}
