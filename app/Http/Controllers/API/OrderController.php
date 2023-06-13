<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Mail\OrderInfo;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function orderBy(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'first_name' => 'required',
            'address' => 'required',
            'description' => 'nullable',
            'last_name' => 'required',
            'total_price' => 'required',

            'email' => 'required|email',
            'products' => 'required',
        ], [
            'email' => 'Поле Email заполнено некорректно!',
            'email.required' => 'Заполните поле Email!'
        ]);

        if (!isset($data['address']))
            unset($data['address']);

        if (!isset($data['products']))
        {
            $products = $data['products'];
            unset($data['products']);
        }

        if (!isset($data['email']))
        {
            $email = $data['email'];
            unset($data['email']);
        }

        $order = Order::create($data);

        foreach ($products as $product) {
            OrderProduct::create(
                [
                    'product_id' => $product['id'],
                    'order_id' => $order->id,
                    'count' => $product['quantity'],
                    'price' => $product['price'],
                ]
            );
        }

        Mail::to($email)->send((new OrderInfo($order))->with('order', $order));
        
        return response()->json(['message' => "Заказ отправлен вам на почту"]);
    }
}
