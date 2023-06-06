<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Manufacturer;
use App\Models\PackagingType;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Models\TimeType;
use App\Models\WeightType;
use Illuminate\Http\Request;
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
        $manufacturers = Manufacturer::join('country', 'country.id', '=', 'manufacturers.country_id')
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
                $countImages = ProductImage::where('product_id', $product->id)->count();

                if ($countImages > 4) continue;
                $path = Storage::disk('public')->put('/images/products', $image);
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
        $category = Category::where('id', $product->category_id)->first();
        $brand = Brand::where('id', $product->brand_id)->first()??'';
        $manufacturer = Manufacturer::where('id', $product->manufacturer_id)->first();
        $manufacturer['country'] = Country::where('id', $manufacturer->country_id)->first()->name;
        $expiration = TimeType::where('id', $product->expiration_type_id)->first()->title??'';
        $packaging = PackagingType::where('id', $product->packaging_id)->first()??'';
        $weight = WeightType::where('id', $product->weight_type_id)->first()->title??'';
        $images = ProductImage::where('product_id', $product->id)->get();

        $tags = ProductTag::join('tags', 'tags.id', '=', 'products_tags.tag_id')
                                            -> select('tags.title', 'tags.id')
                                            -> where('product_id', $product->id)->get();

        return view('admin.product.show', compact('product', 'category', 'brand', 'manufacturer',
                                                    'expiration', 'packaging', 'weight', 'tags', 'images'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $manufacturers = Manufacturer::join('country', 'country.id', '=', 'manufacturers.country_id')
                        ->select('manufacturers.id', 'country.name as country', 'manufacturers.name as manufacturer')->get();
        $expirations = TimeType::all();
        $packagings = PackagingType::all();
        $weights = WeightType::all();
        $tags = Tag::all();

        $images = ProductImage::where('product_id', $product->id)->get();

        $olds['category'] = Category::where('id', $product->category_id)->select('title')->first()['title']??'';

        $olds['manufacturer'] = Manufacturer::join('country', 'country.id', '=', 'manufacturers.country_id')
                                            ->select('manufacturers.id', 'country.name as country', 'manufacturers.name as name')
                                            ->where('manufacturers.id', $product->manufacturer_id)->first();

        $olds['expiration'] = TimeType::where('id', $product->expiration_type_id)->first()['title']??'';
        $olds['packaging'] = PackagingType::where('id', $product->packaging_id)->first()['title']??'';
        $olds['weight'] = WeightType::where('id', $product->weight_type_id)->first()['title']??'';
        $olds['brand'] = Brand::where('id', $product->brand_id)->first()['title']??'';

        $olds['tags'] = ProductTag::join('tags', 'tags.id', '=', 'products_tags.tag_id')
                                            -> select('tags.title', 'tags.id')
                                            -> where('product_id', $product->id)->get();

        return view('admin.product.edit', compact('product', 'categories', 'brands', 'manufacturers', 'expirations', 'packagings',
                                                    'weights', 'tags', 'images', 'olds'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $tempData = [];

        if (isset($data['preview_image']))
        {
            if ($product->preview_image !== 'images/main/none.png') {
                Storage::disk('public')->delete('/'.$product->preview_image);
            }
            $tempData['preview_image'] = Storage::disk('public')->put('/images/products', $data['preview_image'] );
        }

        if (isset($data['tags'])) {
            $tags = $data['tags'];
            $oldTags = ProductTag::where('product_id', $product->id)->pluck('tag_id')->toArray();
            $delTags = array_diff($oldTags, $tags);
            foreach ($tags as $tag) {
                ProductTag::updateOrCreate([
                    'tag_id' => $tag,
                    'product_id' => $product->id
                ]);
            }
            foreach ($delTags as $delTag) {
                ProductTag::where('tag_id', $delTag)->where('product_id', $product->id)->delete();
            }
        }

        if (isset($data['images'])) {
            $newImages = $data['images'];
            foreach ($newImages as $image) {
                $countImages = ProductImage::where('product_id', $product->id)->count();

                if ($countImages > 4) continue;
                $path = Storage::disk('public')->put('/images/products', $image);
                ProductImage::create(
                    [
                        'product_id' => $product->id,
                        'image_path' => $path
                    ]
                );
            }
        }

        $product->update([
            'title' => $data['title'],
            'article' => $data['article'],
            'ingredients' => $data['ingredients'],
            'weight' => $data['weight'],
            'calorie' => $data['calorie'],
            'count' => $data['count'],
            'price' => $data['price'],
            'description' => $data['description'],
            'published' => $data['published'],
            'category_id' => $data['category'],
            'brand_id' => $data['brand'],
            'manufacturer_id' => $data['manufacturer'],
            'expiration_date' => $data['expiration'],
            'expiration_type_id' => $data['expiration_type'],
            'packaging_id' => $data['packaging'],
            'weight_type_id' => $data['weight_type']
        ] + $tempData);

        return redirect()->route('product.show', $product->id);
    }

    public function removeImage(Product $product, ProductImage $image)
    {
        $image->delete();

        return redirect()->route('product.edit', $product->id);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
