<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use transloadit\Transloadit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class VideoController extends Controller
{

	public function getAllVideo()
	{
		$response =   [
		    "status"    =>"200",
			"data"	=> $this->videoRepo->getAllVideo()
		];
		
		return response()->json($response);
	}

	public function getVideo($id)
	{
		$validator = $this->validator->getSingleVideoValidation(["id" => $id]);

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{   
		    $response =  [
		        "status"    => "200",
		        "message"   => "Video successful deleted",
		    	"data"		=> $this->videoRepo->getVideoWhere("id", $id),
		    ];
		}
		
		return response()->json($response);
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
		$request['id'] = requestTokenUserData($request->header('token'))->id;
		
		$validator 	= $this->validator->uploadVideoValidation(['file' => $request->file('file') ]);

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$user_id 	= requestTokenUserData($request->header('token'))->id;
			$video_data =  $this->videoRepo->uploadVideo($user_id, $request->file('file'));
			
			$response =  [
			    "status"    => "200",
			    "message"   => "Video successful uploaded",
			    "id"		=> $video_data['id'],
			    "urls"		=> $video_data['urls'],
			];
		}

		return response()->json($response);
	}

	// public function postUploadVideo(Request $request)
	// {
		
	// 	dd($request->file('file'));

	// 	$validator = $this->validator->uploadVideoValidation($request->all());

	// 	if ($validator->fails())
	// 	{
	// 	    $response =   [
	// 	        "status"    =>"501",
	// 	        "message"   => $validator->errors()
	// 	    ];
	// 	}
	// 	else
	// 	{
	// 		// $request['user_id'] = requestTokenUserData($request->header('token'))->id;
	// 		$request['user_id'] = 1;
			
	// 		$this->videoRepo->uploadVideo($request->all(), $request->file('video'));
		    
	// 	    $response =  [
	// 	        "status"    =>"200",
	// 	        "message"   => "Video successful uploaded",
	// 	    ];
	// 	}

	// 	return response()->json($response);
	// }


	// public function postUploadVideo(Request $request)
	// {
	// 	$file 				= $request->file('video');

	// 	return requestTokenUserData($request->header('token'));
		
	// 	$file_size 			= $file->getClientSize();
	// 	$file_name 			= $file->getClientOriginalName();
	// 	$file_is_valid 		= $file->isValid();
	// 	$file_extension 	= $file->getExtension();
	// 	$file_error_message = $file->getErrorMessage();
	// 	$destination_path 	= public_path() . "/upload/videos";

	// 	$file->move($destination_path, md5($file_name) . time());
	// }

}
