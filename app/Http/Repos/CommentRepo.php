<?php

namespace App\Http\Repos;

use App\Model\Comment;

class CommentRepo
{

	public function getAllUser()
	{
		return User::all();
	}	

	public function commentOnPost($data)
	{
		$create = [
			"user_id" 	=> $data['user_id'],
			"post_id"	=> $data['post_id'],
			"comment"	=> $data['comment'],
		];

		Comment::create($create);
	}

	public function deleteComment($data)
	{
		Comment::where([
				['user_id', '=', $data['user_id']],
				['post_id', '=', $data['post_id']],
		])->delete();;
	}
}