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

        // $type = Auth::user_type();

        // if (Auth::guard($guard)->check()) {
        //     if($type=='Admin'){
        //         return redirect('/adminhome');
        //     } else {
        //         return redirect('/userhome');
        //     }
        // }

        if (Auth::guard($guard)->check()) {
            return redirect('/userhome');
        }

        return $next($request);
    }
}
