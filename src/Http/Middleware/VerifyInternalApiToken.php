<?php

namespace ThisIsDevelopment\LaravelApiTokenMiddleware\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyInternalApiToken
{
    public function handle(Request $request, Closure $next): mixed
    {
        $headerToken = $request->header(config(
            'laravel-api-token-middleware.token_header_key',
            'X-API-Key'
        ));

        if ($headerToken !== null && $headerToken === config('laravel-api-token-middleware.token')) {
            return $next($request);
        }

        return response()->json(['message' => config('laravel-api-token-middleware.token_unauthorized_message')], 401);
    }
}
