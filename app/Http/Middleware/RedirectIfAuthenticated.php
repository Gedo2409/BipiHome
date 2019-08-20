<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //dd($request->get('previous'));
            $redirect = ($request->get('previous') == null || $request->get('previous') == '/register') ? '/backend' : $request->get('previous');
            //dd($redirect);
            // return $redirect;
        }

        return $next($request);
    }
}
