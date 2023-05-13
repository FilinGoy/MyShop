<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    /*     // index | create | store | edit | show | update | delete
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
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

        return view('admin.brand.show', compact($brand));
    }

    public function delete(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin.brand.index');
    } */
}
