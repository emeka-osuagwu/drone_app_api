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
	
	public function postCreatePost(Request $request)
	{
		return $this->postRepo->createPost($request->all());
	}
}
