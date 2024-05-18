<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class orderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'products_id' => $this->products_id,
            'category_id' => $this->category_id,
            'basket_id' => $this->basket_id,
            'name' => $this->name,
            'size' => $this->size,
            'price' => $this->price,
            'count' => $this->count,
        ];
    }
}
