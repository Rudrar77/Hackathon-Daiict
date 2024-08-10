<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        // Assuming you store the authenticated user's information in the session
        if (!$request->session()->has('user')) {
            return redirect('/');
        }

        return $next($request);
    }
}

    
