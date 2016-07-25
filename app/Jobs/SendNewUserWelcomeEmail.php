<?php

namespace App\Jobs;

use Mail;
use App\User;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;

class SendNewUserWelcomeEmail extends Job
{
    use SerializesModels;
    
    public $user; 

    public function __construct($email)
    {
        $this->email = $email;
    }
    
    /*=========================================
    Send New user welcome email
    ==========================================*/
    public function handle()
    {
        $email = $this->email;

        Mail::send('emails.users.new_user_welcome_email', compact('email'), function ($message) use ($email) {
            $message->from(env('ADMIN_EMAIL'), 'Registration Successful');
            $message->to($email)->subject("Welcome to Drone App");
        });
    }
}
