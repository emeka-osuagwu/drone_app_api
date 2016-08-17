<?php

namespace App\Jobs;

use Mail;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;

class SendAdminAccountInfo extends Job
{
    use SerializesModels;
    
    public $user; 

    public function __construct($user)
    {
        $this->user = $user;
    }
    
    public function handle()
    {
        $user = $this->user;

        Mail::send('emails.users.send_new_user_info', compact('user'), function ($message) use ($user) {
            $message->to($user['email'])->subject("Welcome to Oyster " . $user['name']);
        });
    }
}
