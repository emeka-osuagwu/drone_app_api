<?php

namespace App\Http\Middleware;

use Closure;
use App\PasswordReset;
use App\Model\ResetPassword;

class ValidateResetToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if ($request->has('token') && $request->has('email')) 
        {
            $token = ResetPassword::where('token', $request->token)->get();

            if ($token->count() > 0) 
            {
                return $next($request); 
            }
        }
        session()->flash('invalid_request_token_message', 'good');
        return redirect()->to("password/forgot");
    }

}