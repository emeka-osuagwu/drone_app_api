<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{

	public function getALlPost()
	{
		return $this->postRepo->getAllPost();
	}

	public function getUserPost($id)
	{
		return $this->postRepo->getPostWhere('id', $id);
	}

	public function postCreatePost(Request $request)
	{
		return $this->postRepo->createPost($request->all());
	}
}
