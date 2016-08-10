<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckUserProfileValidation
{
    public function handle($request, Closure $next)
    {

        $pass_routes_with_out_token = [
            "login",
            "dashboard/user",
            "logout",
            "dashboard/user/update",
        ];

        /*======================================================================
        | Check if {$request->path()} is part of the pass_routes_with_out_token
        =======================================================================*/
        foreach ($pass_routes_with_out_token as $route) 
        {
            if ($route == $request->path()) 
            {
                return $next($request);
            }
        }

        if (Auth::check()) 
        {
            if (Auth::user()->profile_status == 0) 
            {
                return redirect()->to('dashboard/user');
            }
        }
        return $next($request);
    }
}
