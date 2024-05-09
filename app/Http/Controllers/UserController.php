<?php

namespace App\Http\Controllers;

use App\Http\Requests\userCreateRequest;
use App\Http\Resources\userResource;
use App\Models\User;
use App\Services\User\userCreate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(userCreateRequest $request)
    {
        [$user, $token] = app(userCreate::class)->create($request->all());
        return response([
            'user_data' => new userResource($user),
            'token' => $token
        ]);
    }

    public function login(Request $request)
    {
        //
    }
}
