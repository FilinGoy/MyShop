<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'address' => 'nullable',
            'total_price' => 'required',
            'products' => 'required'
        ]);

        if (!isset($data['address'])) unset($data['address']);

        $products = $data['products'];
        unset($data['products']);

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

        return response()->json(['message' => "Заказ отправлен вам на почту"]);
    }
}
