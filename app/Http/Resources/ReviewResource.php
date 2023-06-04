<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'published' => $this->published,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
            'date' => $this->date,
            'rate' => $this->rate,
            'content' => $this->content,
            'created' => $this->created_at,
            'updated' => $this->updated_at
        ];
    }
}
