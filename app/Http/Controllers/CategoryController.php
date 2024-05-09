<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryCreateRequest;
use App\Http\Requests\categoryUpdateRequest;
use App\Http\Resources\categoryResource;
use App\Models\Category;
use App\Services\Category\categoryStore;
use App\Services\Category\categoryUpdate;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return categoryResource::collection(Category::all());
    }
    public function show($id)
    {
        return new categoryResource(Category::findOrFail($id));
    }
    public function store(categoryCreateRequest $request)
    {
        $category = app(categoryStore::class)->execute($request->all());
        return new categoryResource($category);
    }
    public function update(categoryUpdateRequest $request, $id)
    {
        return new categoryResource(app(categoryUpdate::class)->execute($id, $request->all()));
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return response([
            "status" => "success",
        ], 200);
    }
}
