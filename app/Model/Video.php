<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	protected $table 		= "videos";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'url', 
	    'title', 
	    'user_id', 
	    'description', 
	];

	public function user()
	{
	   return $this->belongsTo('App\User', 'user_id');
	}

}
