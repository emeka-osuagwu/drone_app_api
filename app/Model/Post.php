<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table 		= "posts";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'title', 
	    'user_id', 
	    'video_id', 
	    'description', 
	];

	public function user()
	{
	   return $this->belongsTo('App\User', 'user_id');
	}

	public function video()
	{
	   return $this->belongsTo('App\Model\Video', 'video_id');
	}

}
