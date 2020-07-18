<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }
        echo "this is 中间件 RedirectIfAuthenticated ---- 前缀 ---- <br>";
        $response = $next($request);
        echo "this is 中间件 RedirectIfAuthenticated ---- 后缀 ---- <br>";
        return $response;
    }
}
