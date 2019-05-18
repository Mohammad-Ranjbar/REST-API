<?php

namespace App\Http\Controllers\api\User;

use App\Http\Requests\api\User\UserLoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(UserLoginRequest $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            //create token and return
            $user = auth()->user();

            return [
                'status' => true,
                'message' => 'ورود موفقیت آمیز بود',
                'token' => $user->createToken('create')->accessToken,
            ];



        }

        return [
            'status' => false,
            'message' =>'ورود موفقیت آمیز نبود'

        ];
    }
}
