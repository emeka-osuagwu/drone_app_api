<?php

namespace App\Http\Repos;

use App\Model\Post;

class PostRepo
{

	public function getAllUser()
	{
		return User::all();
	}	

	public function createPost($data)
	{
		Post::create($data);
	}
}