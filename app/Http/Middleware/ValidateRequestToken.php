<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ValidateRequestToken
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

        if ($request->isMethod('get') || $request->path() == "api/v1/login" ) {
            
            return $next($request);
        }

        if ($request->header('token') != null && $request->header('token') != "") 
        {
            if (checkRequestTokenUserExist($request->header('token')) < 1) 
            {
                $response =  [
                    "status"    =>"500",
                    "message"   => "invalid user request token",
                ];

                return response()->json($response);
            }

            return $next($request);
        }
        else
        {
            $response =  [
                "status"    =>"500",
                "message"   => "Request token not set error",
            ];

            return response()->json($response);
        }
    }

}

