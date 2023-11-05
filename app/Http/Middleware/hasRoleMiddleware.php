<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class hasRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , string $role): Response
    {
        if ($request->is('search*')) {
            // Skip role check for search requests
            return $next($request);
        }
        $user = auth()->user();
        if (!$user || !$user->hasRole($role)){
            abort(403);
        }

        return $next($request);
    }
}
