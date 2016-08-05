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
        if (checkRequestTokenUserIsAdmin($request->header('token'))) 
        {
            return $next($request);
        }
        else
        {
            $response =  [
                "status"    =>"500",
                "message"   => "The Routes is restricted to site admin only",
            ];

            return response()->json($response);
        }
    }

}

