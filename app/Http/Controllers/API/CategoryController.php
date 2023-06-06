<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GeneralResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return GeneralResource::collection($categories);
    }
}
