<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Mail\OrderInfo;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\PaymentType;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'description' => 'nullable',
            'datetime_delivery' => 'required',
            'total_price' => 'required',
            'payment_id' => 'required',
            'products' => 'required',
            'number' => 'required'
        ], [
            'email' => 'Поле Email заполнено некорректно!',
            'email.required' => 'Заполните поле Email!',
            'number.required' => 'Заполните поле номера!',
            'first_name.required' => 'Заполните поле Имя!',
            'last_name.required' => 'Заполните поле Фамилия!',
            'address.required' => 'Заполните поле Адрес!',
            'datetime_delivery.required' => 'Заполните поле Дата доставки',
            'payment_id.required' => 'Веберите Способ оплаты',
            'total_price.required' => 'Ошибка итоговой суммы',
            'products.required' => 'Ошибка (отсутсвуют товары)',
        ]);

        if (isset($data['products']))
        {
            $products = $data['products'];
            unset($data['products']);
        }

        if (isset($data['email']))
        {
            $email = $data['email'];
            unset($data['email']);
        }

        if (isset($data['number']))
        {
            $number = $data['number'];
            unset($data['number']);
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

        $payment = PaymentType::where('id', $order->payment_id)->pluck('title')->first();


        Mail::to($email)->send(new OrderInfo($order, $products, $payment, $number));

        return response()->json(['message' => "Благодарим за покупку!\nИнформация о зааке отправлена вам на почту"]);
    }
}
