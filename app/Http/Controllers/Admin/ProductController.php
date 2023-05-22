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
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Models\TimeType;
use App\Models\WeightType;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $manufacturers = Manufacture::join('country', 'country.id', '=', 'manufacturers.country_id')
                        ->select('manufacturers.id', 'country.name as country', 'manufacturers.name as manufacturer')->get();
        $expirations = TimeType::all();
        $packagings = PackagingType::all();
        $weights = WeightType::all();
        $tags = Tag::all();

        return view('admin.product.create', compact('categories', 'brands', 'manufacturers', 'expirations',
                                                    'packagings', 'weights', 'tags'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/images/products', $data['preview_image']);
        }

        $product = Product::firstOrCreate([
            'title' => $data['title'],
            'article' => $data['article'],
            'ingredients' => $data['ingredients'],
            'weight' => $data['weight'],
            'calorie' => $data['calorie'],
            'count' => $data['count'],
            'price' => $data['price'],
            'description' => $data['description'],
            'published' => $data['published'],
            'preview_image' => $data['preview_image'] ?? 'images/main/none.png',
            'category_id' => $data['category'],
            'brand_id' => $data['brand'],
            'manufacturer_id' => $data['manufacturer'],
            'expiration_date' => $data['expiration'],
            'expiration_type_id' => $data['expiration_type'],
            'packaging_id' => $data['packaging'],
            'weight_type_id' => $data['weight_type']
        ]);


        if (array_key_exists('tags', $data)){
            $tags = $data['tags'];
        }

        if (array_key_exists('images', $data)){
            $images = $data['images'];
        }

        unset($data['tags'], $data['images']);

        if (isset($tags)) {
            foreach ($tags as $tag) {
                ProductTag::firstOrCreate([
                    'product_id' => $product->id,
                    'tag_id' => $tag
                ]);
            }
        }

        if (isset($images)){
            foreach($images as $image){
                $countImages = ProductImage::where('product_id', $product->id)->get();

                if (count($countImages) > 10) continue;
                $path = Storage::disk('public')->put('/images', $image);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        $category = Category::where('id', $product->category_id)->get()[0];
        $brand = Brand::where('id', $product->brand_id)->get()[0]??'';
        $manufacturer = Manufacture::where('id', $product->manufacturer_id)->get()[0];
        $manufacturer['country'] = Country::where('id', $manufacturer->country_id)->get()[0]->title;
        $expiration = TimeType::where('id', $product->expiration_type_id)->get()[0]??'';
        $packaging = PackagingType::where('id', $product->packaging_id)->get()[0]??'';
        $weight = WeightType::where('id', $product->weight_type_id)->get()[0]??'';
        $images = ProductImage::where('product_id', $product->id)->get();

        $tags = ProductTag::join('tags', 'tags.id', '=', 'products_tags.tag_id')
                                            -> select('tags.title', 'tags.id')
                                            -> where('product_id', $product->id)->get();

        return view('admin.product.show', compact('product', 'category', 'brand', 'manufacturer',
                                                    'expiration', 'packaging', 'weight', 'tags', 'images'));
    }

    public function edit(Product $product)
    {
        $category = Category::where('id', $product->category_id)->get()[0];
        $brand = Brand::where('id', $product->brand_id)->get()[0]??'';
        $manufacturer = Manufacture::where('id', $product->manufacturer_id)->get()[0];
        $manufacturer['country'] = Country::where('id', $manufacturer->country_id)->get()[0]->title;
        $expiration = TimeType::where('id', $product->expiration_type_id)->get()[0]??'';
        $packaging = PackagingType::where('id', $product->packaging_id)->get()[0]??'';
        $weight = WeightType::where('id', $product->weight_type_id)->get()[0]??'';

        $tags = ProductTag::join('tags', 'tags.id', '=', 'products_tags.tag_id')
                                            -> select('tags.title', 'tags.id')
                                            -> where('product_id', $product->id)->get();

        return view('admin.product.show', compact('product', 'category', 'brand', 'manufacturer',
                                                    'expiration', 'packaging', 'weight', 'tags'));

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
