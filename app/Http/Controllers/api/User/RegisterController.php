<?php

namespace App\Http\Controllers\api\User;

use App\Http\Requests\api\User\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
      $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);

        return [
            'status' => true,
            'message' => trans('api.user.register.success'),
            'token' => $user->createToken('create')->accessToken,
        ];
    }
}
