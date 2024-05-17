<?php

namespace App\Services\Baskets;

class basketStore
{
    public function store($data)
    {
        $basket = auth()->user()->baskets()->create([
            'date' => $data['date']
        ]);
        return $basket;
    }
}
