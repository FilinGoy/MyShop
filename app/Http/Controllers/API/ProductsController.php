<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
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
        $products = DB::table('products')->where('title', 'like', '%' . $title['title'] . '%')->where('published', true)->get();

        return $products;
    }
}
