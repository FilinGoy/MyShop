<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\PaymentType;

class PaymentTypeController extends Controller
{
    public function __invoke()
    {
        $paymentTypes = PaymentType::whereNotIn('id', [1])->get();
        return response()->json($paymentTypes);
    }
}
