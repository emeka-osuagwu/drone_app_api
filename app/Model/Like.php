<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	protected $table 		= "likes";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'post_id', 
	    'user_id', 
	];

	public function user()
	{
	   return $this->belongsTo('App\User', 'user_id');
	}

	public function post()
	{
	   return $this->belongsTo('App\Model\Post', 'post_id');
	}
}
