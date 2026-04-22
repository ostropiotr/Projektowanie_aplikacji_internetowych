<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('role')) {
            return redirect()->route('login')->with('login_error', 'Dostęp zabroniony. Zaloguj się najpierw.');
        }

        return $next($request);
    }
}