<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next) {
    //     if (Auth::user()->role == "Master" || Auth::user()->role == "Admin") {
    //         return $next($request);
    //     } else {
    //         return redirect("/login")->with("error","You are not authorized for this action");
    //     }
    // }

    public function handle($request, Closure $next)
    {
        // dd(auth()->user()->roles->first()->name);
        if (auth()->check()) {
            if (auth()->user()->roles->first()->name == "Master" || auth()->user()->roles->first()->name == "Admin") {
                return $next($request);
            }else{
                auth()->logout();
                return redirect("/login")->with("error","You are not authorized for this account!");
            }
        }
        return $next($request);
    }
}
