<?php

namespace App\Services\Category;

use App\Models\Category;

class categoryStore
{
    public function execute($data)
    {
        return Category::create([
            'name' => $data['name'],
        ]);
    }
}
