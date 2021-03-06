<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
	function __construct($foo = null)
	{
		parent::__construct();
	}

	public function getALlPost()
	{
		return $this->postRepo->getAllPost();
	}

	public function getUserPost($id)
	{
		return $this->postRepo->getPostWhere('id', $id)->get();
	}

	public function getUserPosts()
	{
		$videos =  $this->postRepo->getPostWhere('user_id', Auth::user()->id)->get();
		return view('dashboard.pages.videos', compact('videos'));
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

	public function postLikePost(Request $request)
	{
		$validator 	= $this->validator->likePostValidation($request->all());

		if ($this->likeRepo->checkUserLikePost($request['user_id'], $request['post_id'])->count() > 0) 
		{
			return [
			    "status"    => "501",
			    "message"   => "user can like post more then once :("
			];
		}

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$this->likeRepo->likePost($request->all());
			$this->postRepo->increaseLikes($request['post_id']);
			
			$response =  [
			    "status"    => "200",
			    "message"   => "Post liked",
			];
		}

		return response()->json($response);
	}

	public function postDisLikePost(Request $request)
	{
		$validator 	= $this->validator->likePostValidation($request->all());

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$this->likeRepo->dislikePost($request->all());
			$this->postRepo->decreaseLikes($request['post_id']);
			
			$response =  [
			    "status"    => "200",
			    "message"   => "Post disliked",
			];
		}

		return response()->json($response);
	}

	public function postComment(Request $request)
	{
		$validator 	= $this->validator->postCommentValidation($request->all());

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$this->commentRepo->commentOnPost($request->all());
			$this->postRepo->increaseComment($request['post_id']);
			
			$response =  [
			    "status"    => "200",
			    "message"   => "Comment Created",
			];
		}

		return response()->json($response);
	}

	public function postDeleteComment(Request $request)
	{
		$validator 	= $this->validator->postDeleteCommentValidation($request->all());

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$this->commentRepo->deleteComment($request->all());
			$this->postRepo->decreaseComment($request['post_id']);
			
			$response =  [
			    "status"    => "200",
			    "message"   => "Comment Deleted",
			];
		}

		return response()->json($response);
	}

	public function postUpdatePost(Request $request)
	{
		$this->postRepo->updatePost($request->all());
		return back();
	}

	public function getVideoRequest()
	{
		$video_requests = $this->videoRequestRepo->getAllVideoRequest();
		return view('dashboard.pages.video_request', compact('video_requests'));
	}

	public function previewVideo($id)
	{
		$video 		= $this->postRepo->getPostWhere('id', $id)->get()->first();
		// $r_videos 	= $this->postRepo->getRelatedPost($)->get(); 
		return view('app.pages.preview', compact('video'));
	}
}
