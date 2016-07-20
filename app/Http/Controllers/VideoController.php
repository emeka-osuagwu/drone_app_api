<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use transloadit\Transloadit;
use Illuminate\Http\Request;

class VideoController extends Controller
{

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
			$this->videoRepo->uploadVideo($request->all());
		    $response =  [
		        "status"    =>"200",
		        "message"   => "Video successful uploaded",
		    ];
		}

		return response()->json($response);
	}

	// public function postUpdateVideo(Request $request)
	// {
	// 	$destination_path = public_path();

	// 	$file 				= $request->file('video');
	// 	$file_size 			= $file->getClientSize();
	// 	$file_name 			= $file->getClientOriginalName();
	// 	$file_is_valid 		= $file->isValid();
	// 	$file_extension 	= $file->getExtension();
	// 	$file_error_message = $file->getErrorMessage();

	// 	$file->move($destination_path, "emeka");
	// }

}
