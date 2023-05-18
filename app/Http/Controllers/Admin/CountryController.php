<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Country\StoreRequest;
use App\Http\Requests\Country\UpdateRequest;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin.country.index', compact('countries'));
    }

    public function create()
    {
        
        return view('admin.country.create');
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Country::firstOrCreate([
            'name' => mb_convert_case($data['name'], MB_CASE_TITLE, "UTF-8"),
            'abbreviation' => strtoupper($data['abbreviation'])
        ]);

        return redirect()->back();
    }

    public function edit(Country $country)
    {
        return view('admin.country.edit', compact('country'));
    }

    public function show(Country $country)
    {
        return view('admin.country.show', compact('country'));
    }

    public function update(UpdateRequest $request, Country $country)
    {
        $data = $request->validated();
        $country->update([
            'name' => mb_convert_case($data['name'], MB_CASE_TITLE, "UTF-8"),
            'abbreviation' => strtoupper($data['abbreviation'])
        ]);

        return view('admin.country.show', compact('country'));
    }

    public function delete(Country $country)
    {
        $country->delete();

        return redirect()->route('country.index');
    }
}
