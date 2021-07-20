<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //specify middleware
        if($request->path('login') && $request->session()->has('user')){
            return redirect()->route('dashboard')->with('success', 'You are already logged in');
        }

        

        return $next($request);
    }
}
