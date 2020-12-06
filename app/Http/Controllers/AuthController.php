<?php

namespace App\Http\Controllers;

use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            try {
                $user = new User(['email' => $email]);

                $payload = ['id' => $user->id, 'email' => $user->email];
                $key = config('jwt.secret');
                $alg = config('jwt.alg');

                $jwt = JWT::encode($payload, $key, $alg);

                return $this->responseSuccess($jwt, 200);
            } catch (\Exception $exception) {
                return $this->responseFail('Не удалось авторизоваться');
            }
        }

        return $this->responseFail('Неверный email или пароль');
    }

    public function responseSuccess($data, $code=200) {
        return response()->json([
            'success' => true,
            'payload' => $data
        ], $code);
    }

    public function responseFail($message) {
        return response()->json([
            'success' => false,
            'error' => $message
        ], 200);
    }
}
