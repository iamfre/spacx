<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateApi
{
    public function handle($request, Closure $next, $guard = null)
    {
        $token = $request->query('api_token');

        if (empty($token)) {
            $token = $request->input('api_token');
        }

        if (empty($token)) {
            $token = $request->bearerToken();
        }

        if ($token !== env('API_TOKEN')) {
            abort(403);
        }

        return $next($request);
    }
}
