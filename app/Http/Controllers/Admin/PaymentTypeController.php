<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\PaymentType;

class PaymentTypeController extends Controller
{
    public function index()
    {
        $types = PaymentType::all();
        return view('admin.payment_type.index', compact('types'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        PaymentType::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(PaymentType $type)
    {
        return view('admin.payment_type.edit', compact('type'));
    }

    public function show(PaymentType $type)
    {
        return view('admin.payment_type.show', compact('type'));
    }

    public function update(UpdateRequest $request, PaymentType $type)
    {
        $data = $request->validated();
        $type->update($data);

        return view('admin.payment_type.show', compact('type'));
    }

    public function delete(PaymentType $type)
    {
        $type->delete();

        return redirect()->route('payment.index');
    }
}
