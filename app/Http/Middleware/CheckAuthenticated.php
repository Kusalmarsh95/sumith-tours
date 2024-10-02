<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return redirect('/login'); // Redirect authenticated users
        }
        return $next($request);
    }
}
