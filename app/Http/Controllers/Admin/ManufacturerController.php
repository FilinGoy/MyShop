<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manufacturer\StoreRequest;
use App\Http\Requests\Manufacturer\UpdateRequest;
use App\Models\Country;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::join('country', 'country.id', '=', 'manufacturers.country_id')
                                        ->select('manufacturers.id', 'manufacturers.name as manufacturer', 'country.name as country')->get();

        return view('admin.manufacturer.index', compact('manufacturers'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('admin.manufacturer.create', compact('countries'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Manufacturer::firstOrCreate([
            'name' => $data['name'],
            'country_id' => $data['country']
        ]);

        return redirect()->back();
    }

    public function edit(Manufacturer $manufacturer)
    {
        $countries = Country::all();
        $manufacturer['country_name'] = Country::where('id', $manufacturer->country_id)->first()['name'] ?? '';
        return view('admin.manufacturer.edit', compact('manufacturer', 'countries'));
    }

    public function show(Manufacturer $manufacturer)
    {
        $manufacturer['country_name'] = Country::where('id', $manufacturer->country_id)->first()['name'] ?? '';
        return view('admin.manufacturer.show', compact('manufacturer'));
    }

    public function update(UpdateRequest $request, Manufacturer $manufacturer)
    {
        $data = $request->validated();
        $manufacturer->update([
            'name' => $data['name'],
            'country_id' => $data['country']
        ]);

        $manufacturer['country_name'] = Country::where('id', $manufacturer->country_id)->first()['name'] ?? '';
        return view('admin.manufacturer.show', compact('manufacturer'));
    }

    public function delete(Manufacturer $manufacturer)
    {
        $manufacturer->delete();

        return redirect()->route('manufacturer.index');
    }
}
