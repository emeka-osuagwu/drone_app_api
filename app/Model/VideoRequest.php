<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VideoRequest extends Model
{
	protected $table 		= "video_request";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'date', 
	    'title', 
	    'budget', 
	    'address', 
	    'description', 
	    'category_id', 
	    'video_lenght', 
	];

	// public function user()
	// {
	//    return $this->belongsTo('App\User', 'user_id');
	// }

	// public function post()
	// {
	//    return $this->belongsTo('App\Model\Post', 'post_id');
	// }
}
