<?php

namespace App\Services\Category;

use App\Models\Category;

class categoryUpdate
{
    public function execute($id, $data)
    {
        $category = Category::find($id);
        $category->update($data);
        return $category;
    }
}
