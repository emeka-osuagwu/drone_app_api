<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table 		= "comments";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'post_id', 
	    'user_id', 
	    'comment', 
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
