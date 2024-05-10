<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "category_id" => $this->category_id,
            "brand_id" => $this->brand_id,
            "name" => $this->name,
            "size" => $this->size,
            "price" => $this->price,
            "count" => $this->count
        ];
    }
}
