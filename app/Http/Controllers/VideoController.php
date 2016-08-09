<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use transloadit\Transloadit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class VideoController extends Controller
{

	public function getAllVideo()
	{
		$videos = $this->postRepo->getAllPost();
		return view('dashboard.pages.videos', compact('videos'));
	}

	public function getVideo($id)
	{
		$video = $this->postRepo->getPostWhere("id", $id)->get()->first();
		return view('dashboard.pages.video', compact('video'));
	}

	public function delete(Request $request, $id)
	{
		
		$validator = $this->validator->deleteVideoValidation(["id" => $id]);

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		elseif (!$this->videoRepo->checkUserCreatedVideo(requestTokenUserData($request->header('token'))->id, $id)) 
		{
			$response = [
		        "status"    => 500,
		        "message"   => "error video can only be deleted by created user",
			];
		}
		else
		{
			$this->videoRepo->deleteVideo($id);
		    
		    $response =  [
		    	"status"	=> 200,
		        "message"   => "Video successful deleted",
		    ];
		}

		return response()->json($response);
	}

	public function postUploadVideo(Request $request)
	{
		$request['id'] 		= Auth::user()->id;
		$request['user_id'] = Auth::user()->id;
		
		$validator 	= $this->validator->uploadVideoValidation(['file' => $request->file('file') ]);

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput($request->all());
		}
		else
		{
			$user_id 				= Auth::user()->id;
			$video_data 			= $this->videoRepo->uploadVideo($user_id, $request->file('file'));
			$request['video_id'] 	= $video_data['id'];
			$this->postRepo->createPost($request->all());
			return redirect('/dashboard/videos');
		}
	}

}
