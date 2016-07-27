<?php

namespace App\Http\Repos;

use App\Model\Post;

class PostRepo
{

	public function getAllPost()
	{
		return Post::with('video')->get();
	}	

	public function createPost($data)
	{
		Post::create($data);
	}
}