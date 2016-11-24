<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
	protected $table 		= "password_resets";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'email', 
	    'token', 
	];

}
