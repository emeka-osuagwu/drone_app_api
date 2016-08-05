<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminUserValidate
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
        dd(checkRequestTokenUserIsAdmin($request->header('token')));
        // if () 
        // {
            
        //     return $next($request);
        // }
        // else
        // {
        //     $response =  [
        //         "status"    =>"500",
        //         "message"   => "Request token not set error",
        //     ];

        //     return response()->json($response);
        // }
    }

}

