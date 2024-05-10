<?php

namespace App\Services\Products;
use App\Http\Resources\productResource;
use App\Models\Products;

class productStore
{
    public function store($data)
    {
        $product = Products::create($data);
        return $product->id;
    }
}
