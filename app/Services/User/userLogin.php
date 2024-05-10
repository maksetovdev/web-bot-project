<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class userLogin
{
    public function login($data)
    {
        $user = User::where('phone',$data['phone'])->first();
        if(!$user || !Hash::check($data['password'],$user->password))
        {
            throw new ModelNotFoundException;
        }
        $token = $user->createToken('user model', ['user'])->plainTextToken;
        return [$user, $token];
    }
}
