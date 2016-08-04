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

	public function likePost($data)
	{
		Like::where([
				['user_id', '=', $user_id],
				['post_id', '=', $post_id],
		])->delete();
	}

	public function checkUserDislikePost($user_id, $post_id)
	{
		return Like::where([
					['user_id', '=', $user_id],
					['post_id', '=', $post_id],
				]);
	}
}