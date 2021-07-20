<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DashboardAcess
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
        //Middleware Logic
        if($request->path('dashboard') && !$request->session()->has('user')){
            return redirect()->route('login_page');
        }


        return $next($request);
    }
}
