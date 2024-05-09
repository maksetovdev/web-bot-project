<?php

namespace App\Services\Brands;

use App\Models\Brand;

class brandUpdate
{
    public function update($data, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update([
            'name' => $data['name'],
        ]);
        return $brand;
    }
}
