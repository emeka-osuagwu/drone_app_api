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
        if ( (int) Auth::user()->role == 1) 
        {
            return $next($request);
        }
        else
        {
            return redirect('invalid_admin');
        }
    }

}

