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
	    'user_id', 
	    'address', 
	    'description', 
	    'category_id', 
	    'video_lenght', 
	];

	public function category()
	{
	   return $this->belongsTo('App\Model\PostCategories');
	}

	// public function post()
	// {
	//    return $this->belongsTo('App\Model\Post', 'post_id');
	// }
}
