<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacture::class, 'manufacturer_id', 'id');
    }

    public function expiration_type()
    {
        return $this->belongsTo(TimeType::class, 'expiration_type_id', 'id');
    }

    public function packaging()
    {
        return $this->belongsTo(PackagingType::class, 'packaging_id', 'id');
    }

    public function weight_type()
    {
        return $this->belongsTo(WeightType::class, 'weight_type_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'products_tags', 'product_id', 'tag_id');
    }

    public function getImageUrlAttribute(){
        return url('storage/' . $this->preview_image);
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
