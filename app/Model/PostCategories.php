<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
	protected $table 		= "post_categories";
	protected $primaryKey 	= 'id';

	protected $fillable = [
	    'name', 
	    'description', 
	];

	public function post()
	{
	   return $this->belongsTo('App\Post');
	}
}
