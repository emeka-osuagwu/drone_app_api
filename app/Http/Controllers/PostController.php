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
		
		$validator 	= $this->validator->createPostValidation($request->all());

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$this->postRepo->createPost($request->all());
			
			$response =  [
			    "status"    => "200",
			    "message"   => "Post successful uploaded",
			];
		}

		return response()->json($response);
	}
}
