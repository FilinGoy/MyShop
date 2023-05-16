<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Manufacture;
use App\Models\PackagingType;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Models\TimeType;
use App\Models\WeightType;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Product::firstOrCreate([
            'article' => $data['article']
        ], $data);

        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {

        $category = Category::where('id', $product->category_id)->get()[0];
        $brand = Brand::where('id', $product->brand_id)->get()[0];
        $manufacturer = Manufacture::where('id', $product->manufacturer_id)->get()[0];
        $manufacturer['country'] = Country::where('id', $manufacturer->country_id)->get()[0]->title;
        $expiration = TimeType::where('id', $product->expiration_type_id)->get()[0];
        $packaging = PackagingType::where('id', $product->packaging_id)->get()[0];
        $weight = WeightType::where('id', $product->weight_type_id)->get()[0];

        $tags = ProductTag::join('tags', 'tags.id', '=', 'products_tags.tag_id')
                                            -> select('tags.title', 'tags.id')
                                            -> where('product_id', $product->id)->get();

        return view('admin.product.show', compact('product', 'category', 'brand', 'manufacturer',
                                                    'expiration', 'packaging', 'weight', 'tags'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return view('admin.product.show', compact('product'));
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
