<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

	protected $fillable = [
	    'url', 
	    'title', 
	    'user_id', 
	    'description', 
	];

}
