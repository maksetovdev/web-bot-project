<?php

namespace App\Http\Controllers;

use App\Http\Requests\userCreateRequest;
use App\Http\Requests\userLoginRequest;
use App\Http\Resources\userResource;
use App\Services\User\userCreate;
use App\Services\User\userLogin;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

    public function login(userLoginRequest $request)
    {
        try {
            [$user, $token] = app(userLogin::class)->login($request->all());
            return response([
                'user_data' => new userResource($user),
                'token' => $token
            ]);
        }
        catch (ModelNotFoundException $m_error) {
            return response([
                'error' => 'User not found or password is incorrect!'
            ]);
        }
    }
}
