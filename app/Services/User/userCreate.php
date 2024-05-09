<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userCreate
{
    public function create($data)
    {
        $user = User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'city' => $data['city'],
            'password' => Hash::make($data['password']),
        ]);
        $token = $user->createToken('user model', ['user'])->plainTextToken;
        return [$user, $token];
    }
}
