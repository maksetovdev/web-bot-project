<?php

namespace App\Http\Controllers;

use App\Http\Resources\orderResource;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Services\Orders\orderStore;
use App\Services\Orders\orderUpdate;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return orderResource::collection(Order::all());
    }
    public function store(StoreOrderRequest $request)
    {
        $order = app(orderStore::class)->store($request->all());
        return new orderResource($order);
    }
    public function show($id)
    {
        return new orderResource(Order::find($id));
    }
    public function update(UpdateOrderRequest $request, $id)
    {
        $order = app(orderUpdate::class)->update($request->all(), $id);
        return new orderResource($order);
    }
    public function destroy($id)
    {
        Order::destroy($id);
        return response([
            'status' => 'success'
        ], 200);
    }
}
