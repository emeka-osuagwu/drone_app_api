<?php

namespace App\Http\Repos;

use App\Model\Post;

class PostRepo
{

	public function getAllPost()
	{
		return Post::with('video', 'user')->get();
	}	

	public function getPostWhere($field, $value)
	{
		return Post::with('video', 'user')->where($field, $value);
	}

	public function createPost($data)
	{
		Post::create($data);
	}

	public function increaseLikes($post_id)
	{
		$post 			= Post::find($post_id);
		$post->likes 	= $post->likes + 1;
		$post->save(); 
	}

}