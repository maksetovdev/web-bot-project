<?php

namespace App\Http\Controllers;

use App\Http\Resources\basketResource;
use App\Models\Basket;
use App\Http\Requests\StoreBasketRequest;
use App\Http\Requests\UpdateBasketRequest;
use App\Services\Baskets\basketStore;
use App\Services\Baskets\basketUpdate;

class BasketController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $baskets = Basket::where('user_id', $user_id, '=')->get();
        return basketResource::collection($baskets);
    }
    public function store(StoreBasketRequest $request)
    {
        $basket = app(basketStore::class)->store($request->all());
        return new basketResource($basket);
    }
    public function show($id)
    {
        return new basketResource(Basket::find($id));
    }
    public function update(UpdateBasketRequest $request, $id)
    {
        $basket = app(basketUpdate::class)->update($request->all(),$id);
        return new basketResource($basket);
    }

    public function destroy($id)
    {
        $basket = Basket::find($id);
        $basket->delete();
        return response([
            'status' => 'success'
        ]);
    }
}
