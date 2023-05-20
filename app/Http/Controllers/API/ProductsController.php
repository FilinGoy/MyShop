<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        return $products;
    }
}
