<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use function PHPSTORM_META\type;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!auth()->check()) {
        //     return redirect()->route('login')->with('error', 'Please login first');
        // }
        // if (auth()->check() && auth()->user()->role_as == 0 && intval($role) == 0) {
        //     return $next($request);
        // }
        // if (auth()->check() && auth()->user()->role_as == 1 && intval($role) == 1) {
        //     return $next($request);
        // }
        // if (auth()->check() && auth()->user()->role_as == 1 && intval($role) == 0) {
        //     return $next($request);
        // }
        if (auth()->check() && auth()->user()->role_as == 1) {
            return $next($request);
        }
        return redirect()->route('home.index')->with('error', 'You are not authorized to access this page');
    }
}
