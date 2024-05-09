<?php

namespace App\Services\Brands;

use App\Models\Brand;

class brandStore
{
    public function execute($data)
    {
        return Brand::create([
            'name' => $data['name'],
        ]);
    }
}
