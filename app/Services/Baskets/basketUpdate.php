<?php

namespace App\Services\Baskets;

use App\Models\Basket;

class basketUpdate
{
    public function update($data, $id)
    {
        $basket = Basket::find($id);
        $basket->update([
           'date' => $data['date']
        ]);
        return $basket;
    }
}
