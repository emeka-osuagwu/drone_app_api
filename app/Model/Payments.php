<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
	protected $table 		= "payments";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'user_id', 
	    'video_id', 
	    'description', 
	];

	public function user()
	{
	   return $this->belongsTo('App\User');
	}
}
