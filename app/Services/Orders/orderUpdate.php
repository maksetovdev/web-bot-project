<?php

namespace App\Services\Orders;

use App\Models\Order;

class orderUpdate
{
    public function update($data, $id)
    {
        $order = Order::find($id);
        if(isset($data['products_id']))
        {
            $order->update([
                'products_id' =>  $data['products_id'],
            ]);
        }
        if(isset($data['category_id']))
        {
            $order->update([
                'category_id' =>  $data['category_id'],
            ]);
        }
        if(isset($data['basket_id']))
        {
            $order->update([
                'basket_id' =>  $data['basket_id'],
            ]);
        }
        if(isset($data['name']))
        {
            $order->update([
                'name' =>  $data['name'],
            ]);
        }
        if(isset($data['size']))
        {
            $order->update([
                'size' =>  $data['size'],
            ]);
        }
        if(isset($data['price']))
        {
            $order->update([
                'price' =>  $data['price'],
            ]);
        }
        if(isset($data['count']))
        {
            $order->update([
                'count' =>  $data['count'],
            ]);
        }
        return $order;
    }
}
