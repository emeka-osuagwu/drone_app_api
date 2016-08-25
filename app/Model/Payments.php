<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
	protected $table 		= "payments";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'user_id', 
	    'post_id',  
	    'card_type', 
	    'customer_id', 
	    'payment_type', 
	    'payment_status', 
	    'transaction_date', 
	    'transaction_number', 
	];

	public function user()
	{
	   return $this->belongsTo('App\User');
	}

	public function post()
	{
	   return $this->belongsTo('App\Model\Post');
	}
}
