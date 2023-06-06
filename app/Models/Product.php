<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Filterable;

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
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
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

    public function getRateAttribute()
    {
        $rate = $this->hasMany(Review::class, 'product_id', 'id')->pluck('rate')->toArray();
            return $rate ? round(array_sum($rate) / count($rate), 1) : 0;
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
