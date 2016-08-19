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
	    'narration', 
	    'payment_status', 
	    'transaction_number', 
	    'card_id', 
	];

	public function user()
	{
	   return $this->belongsTo('App\User');
	}
}
