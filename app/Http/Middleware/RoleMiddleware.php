<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || !$request->user()->hasRole($role)) {
            return abort(404);
        }

        return $next($request);
    }
}
