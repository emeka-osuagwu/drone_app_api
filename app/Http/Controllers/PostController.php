<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function postCreatePost(Request $request)
	{
		$this->postRepo->createPost($request->all());
	}
}
