<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(Product $product)
    {
        return new ProductResource($product);
    }


    public function getProductFromCategory(Category $category, Request $request)
    {
        $page = $request->get('page', 1); // значение по умолчанию 1
        $count = $request->get('count', 9); // значение по умолчанию 9

        $products = Product::where('category_id', $category->id)->where('published', true)->paginate($count, ['*'], 'page', $page);

        return [
            'products' => ProductResource::collection($products),
            'category' => $category,
            'meta' => $products,
        ];
    }

    public function getProductFromRate()
    {
        $products = Product::all()->sortByDesc('rate')->take(8);
        return [
            'products' => ProductResource::collection($products)
        ];
    }
}
