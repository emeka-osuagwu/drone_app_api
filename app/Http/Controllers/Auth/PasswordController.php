<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Model\ResetPassword;
use App\Http\Repos\ValidationRepo;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->validator    = new ValidationRepo;
    }

    public function forgotPasswordPage()
    {
       return view('app.pages.forget_password');
    }

    public function resetPassword(Request $request)
    {
        $validator = $this->validator->resetPasswordValidation($request->all());

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            $user   = User::where('email', $request['email'])->get()->first();
            $token  = bcrypt($request['email'] . Carbon::now());

            $create = [
                "email" => $request['email'],
                "token" => $token,
            ];

            ResetPassword::create($create);

            Mail::send('emails.users.password_reset', compact('token', 'user'), function ($message) use ($user, $token) {
                $message->to($user->email)->subject("Your Password Reset Link");
                $message->from(env('ADMIN_EMAIL'), env('SENDER_NAME'));
            });

            session()->flash('password_reset_success_message', 'good');
            return back();
        }
    }

    public function resetPasswordPage(Request $request)
    {
        $email = $request->email;
        $token = $request->token;
        return view('app.pages.reset_password_form', compact('email', 'token'));
    }

    public function reset(Request $request)
    {
        User::where('email', $request['email'])->update(['password' => bcrypt($request['password'])]);

        ResetPassword::where('token', $request['token'])->delete();

        session()->flash('password_update_success_message', 'Your password as been updated');
        return redirect()->to('login');
    }
}
