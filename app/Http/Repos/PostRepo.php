<?php

namespace App\Http\Repos;

use App\Model\Post;

class PostRepo
{

	public function getAllPost()
	{
		return Post::with('video', 'user', 'category')->get();
	}	

	public function getRelatedPost($tags)
	{
		return Post::where($tags, 'like', 'T%');
	}

	public function getPostWhere($field, $value)
	{
		return Post::with('video', 'user', 'likes', 'category')->where($field, $value);
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

	public function decreaseLikes($post_id)
	{
		$post 			= Post::find($post_id);
		$post->likes 	= $post->likes - 1;
		$post->save(); 
	}

	public function increaseComment($post_id)
	{
		$post 				= Post::find($post_id);
		$post->comments 	= $post->comments + 1;
		$post->save(); 
	}

	public function decreaseComment($post_id)
	{
		$post 				= Post::find($post_id);
		$post->comments 	= $post->comments - 1;
		$post->save(); 
	}


	public function updatePost($data)
	{
		$update = [
			"title" 		=> $data['title'], 
			"tags" 			=> $data['tags'], 
			"price" 		=> $data['price'], 
			"category_id" 	=> $data['category_id'], 
			"description" 	=> $data['description'], 
		];

		Post::where('id', $data['post_id'])->update($update);
	}
}