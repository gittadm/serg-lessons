<?php

namespace lesson_1_12;

use Auth;
use Closure;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $apiToken = $request->api_token;
        //$apiToken = $request->header('secret-token');

        if (!$apiToken || !$this->isValid($apiToken)) {
            abort(403);
        }

        return $next($request);
    }

    private function isValid(string $token): bool
    {
        $secretToken = env('API_TOKEN');

        if (!$secretToken || $token !== $secretToken) {
            return false;
        }

        return true;
    }
}
