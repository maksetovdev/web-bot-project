<?php

namespace App\Services\Products;

use App\Models\Products;

class productUpdate
{
  public function update($data, $id)
  {
//    dd($data);
    $product = Products::find($id);
    if(isset($data['category_id'])) {
        $product->update([
            'category_id' => $data['category_id']
        ]);
    }
    if(isset($data['brand_id'])) {
      $product->update([
          'brand_id' => $data['brand_id']
      ]);
    }
    if(isset($data['name'])) {
      $product->update([
          'name' => $data['name']
      ]);
    }
    if(isset($data['size'])) {
      $product->update([
          'size' => $data['size']
      ]);
    }
    if(isset($data['price'])) {
      $product->update([
          'price' => $data['price']
      ]);
    }
    if(isset($data['count'])) {
      $product->update([
          'count' => $data['count']
      ]);
    }
    return $product;



  }
}
