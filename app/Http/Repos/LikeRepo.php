<?php

namespace App\Http\Repos;

use App\Model\Like;
use Illuminate\Contracts\Filesystem\Filesystem;

class LikeRepo
{
	public function getAllVideo()
	{
		return Video::all();
	}

	public function likePost($data)
	{
		$create = [
			"user_id" 	=> $data['user_id'],
			"post_id"	=> $data['post_id'],
		];

		Like::create($create);
	}
}