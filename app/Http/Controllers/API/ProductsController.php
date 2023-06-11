<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Mail\OrderInfo;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    public function getSearch(Request $request)
    {
        $title = $request->validate(['title' => 'nullable|string']);
        $products = DB::table('products')->where('title', 'like', '%' . $title['title'] . '%')->get();

        return $products;
    }

    public function storeOrder(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'email' => 'required',
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'address' => 'nullable',
            'total_price' => 'required',
            'products' => 'required',
            'products' => 'required'
        ]);

        if (!isset($data['address'])) unset($data['address']);

        $products = $data['products'];
        $email = $data['email'];

        unset($data['products'], $data['email']);


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
