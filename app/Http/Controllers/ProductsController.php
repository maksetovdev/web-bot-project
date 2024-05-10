<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\productResource;
use App\Models\Products;
use App\Services\Products\productStore;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return productResource::collection(Products::all());
    }

    public function show($id)
    {
        return new productResource(Products::findOrFail($id));
    }
    public function store(ProductStoreRequest $request) {
        $id = app(productStore::class)->store($request->all());
        $product = Products::find($id);
        return new ProductResource($product);
    }
}
