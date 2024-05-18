<?php

namespace App\Services\Orders;
use App\Models\Order;
class orderStore
{
    public function store($data)
    {
//        dd($data['products_id']);
        return Order::create([
            'products_id' => $data['products_id'],
            'category_id' => $data['category_id'],
            'basket_id' => $data['basket_id'],
            'name' => $data['name'],
            'size' => $data['size'],
            'price' => $data['price'],
            'count' => $data['count']
        ]);
    }
}
