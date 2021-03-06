<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SendNewUserWelcomeEmail;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        parent::__construct();
    }


    /*=========================================
    # Validates Request
    # Calls Save method from user Repo
    # Send Welcome email tp new user
    # Sends Json Response
    ==========================================*/
    public function postRegister(Request $request)
    {

        $validator = $this->validator->createUserValidation($request->all());

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            if (!isset($request['agreement'])  && $request['agreement'] == '') 
            {
                session()->flash('agreement_error', 'good');
                return back()->withInput($request->all());
            }

            $this->userRepo->createUser($request->all());
            $this->dispatch(new SendNewUserWelcomeEmail($request['email']));
            session()->flash('register_success_message', 'good');
            return redirect('register');
        }
    }

    /*=========================================
    # Validates Request
    # Authenticate user
    # Generate User token with email and id
    # Sends Json Response
    ==========================================*/
    public function postLogin(Request $request)
    {
        $validator = $this->validator->loginUserValidation($request->all());

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            if (Auth::attempt(["email" => $request['email'], "password" => $request['password']])) 
            {
                session()->flash('login_successful', 'good');
                return back();
            }
            else{
                session()->flash('login_falid', 'good');
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); 
    }
}
