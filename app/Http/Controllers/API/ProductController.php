<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct(Product $product)
    {
        return new ProductResource($product);
    }


    public function getProductFromCategory(Category $category)
    {
        $products = Product::where('category_id', $category->id);
        return ProductResource::collection($products);
    }
}
