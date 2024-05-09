<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'category_id',
        'basket_id',
        'name',
        'size',
        'price',
        'count'
    ];
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Products::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    public function baskets(): BelongsToMany
    {
        return $this->belongsToMany(Basket::class);
    }
}
