<?php

namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => new GeneralResource($this->category),
            'brand' => new GeneralResource($this->brand),
            'manufacturer' => new ManufacturerResource($this->manufacturer),
            'expiration_date' => $this->expiration_date,
            'expiration_type' => new GeneralResource($this->expiration_type),
            'article' => $this->article,
            'packaging' => new GeneralResource($this->packaging),
            'ingredients' => $this->ingredients,
            'weight' => $this->weight,
            'weight_type' => new GeneralResource($this->weight_type),
            'calorie' => $this->calorie,
            'count' => $this->count,
            'price' => $this->price,
            'description' => $this->description,
            'published' => $this->published,
            'tags' => $this->tags,
            'rate' => $this->rate,
            'images' => ProductImageResource::collection($this->productImages),
            'preview_image' => $this->imageUrl
        ];
    }
}
