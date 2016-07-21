<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use transloadit\Transloadit;
use Illuminate\Http\Request;

class VideoController extends Controller
{

	public function getAllVideo()
	{
		$response =   [
		    "status"    =>"200",
			"videos"	=> $this->videoRepo->getAllVideo()
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
		    	"video"		=> $this->videoRepo->getVideoWhere("id", $id),
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
	
		$validator = $this->validator->uploadVideoValidation($request->all());

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
			$request['user_id'] = requestTokenUserData($request->header('token'))->id;
			
			$this->videoRepo->uploadVideo($request->all());
		    
		    $response =  [
		        "status"    =>"200",
		        "message"   => "Video successful uploaded",
		    ];
		}

		return response()->json($response);
	}










	// public function postUploadVideo(Request $request)
	// {
	// 	$destination_path 	= public_path();

	// 	$file 				= $request->file('video');
	// 	$file_size 			= $file->getClientSize();
	// 	$file_name 			= $file->getClientOriginalName();
	// 	$file_is_valid 		= $file->isValid();
	// 	$file_extension 	= $file->getExtension();
	// 	$file_error_message = $file->getErrorMessage();

	// 	$file->move($destination_path, "emeka");
	// }

}
