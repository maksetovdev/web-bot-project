<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryCreateRequest;
use App\Http\Requests\categoryUpdateRequest;
use App\Http\Resources\categoryResource;
use App\Models\Brand;
use App\Services\Brands\brandStore;
use App\Services\Brands\brandUpdate;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return categoryResource::collection(brand::all());
    }
    public function show($id)
    {
        return new categoryResource(Brand::findOrFail($id));
    }
    public function store(categoryCreateRequest $request)
    {
        $brand = app(brandStore::class)->execute($request);
        return new categoryResource($brand);
    }
    public function update(categoryUpdateRequest $request, $id)
    {
        return new categoryResource(app(brandUpdate::class)->update($request, $id));
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return response([
            "status" => "success",
        ], 200);
    }
}
