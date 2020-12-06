<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Firebase\JWT\JWT;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class VerifyJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $header = $request->header('Authorization');

        if (!Str::startsWith($header, 'Token')) {
            return $this->responseUnAuth();
        }

        $jwt = Str::substr($header, 6);
        $key = config('jwt.secret');
        $algs = config('jwt.algs');

        if (!isset($jwt) || empty($jwt)) return $this->responseUnAuth();

        try {

            $decoded = JWT::decode($jwt, $key, $algs);

            User::findOrFail($decoded->id);

        }catch (\Exception $exception) {
            return $this->responseUnAuth();
        }

        return $next($request);
    }

    /**
     * Response for unauthorised.
     *
     * @return JsonResponse
     */
    public function responseUnAuth() : JsonResponse {
       return response()->json([
            'success' => false,
            'error' => 'Authentication credentials were not provided or token bearer is missing.'
        ], 401);
    }
}
