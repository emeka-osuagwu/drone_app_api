<?php

namespace App\Http\Repos;

use App\Model\Video;
use Illuminate\Contracts\Filesystem\Filesystem;

class VideoRepo
{
	public function getAllVideo()
	{
		return Video::all();
	}

	public function getVideoWhere($feild, $value)
	{
		return Video::where($feild, $value)->get();
	}

	public function checkUserCreatedVideo($token_user_id, $id)
	{
		$video = Video::where("id", $id)->get()->first();
		
		if ($video->user_id == $token_user_id) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function uploadVideo($user_id, $file_data)
	{	
		$file 				= $file_data;
		$file_size 			= $file->getClientSize();
		$file_name 			= $file->getClientOriginalName();
		$file_is_valid 		= $file->isValid();
		$file_extension 	= $file->getExtension();
		$file_error_message = $file->getErrorMessage();
		$destination_path 	= public_path() . "/upload/videos";
		
		$file->move($destination_path, md5($user_id) . time() . $file_name);
		
		$create = [
			"user_id" 			=> $user_id,
			"original_url" 		=> url('upload/videos/' . md5($user_id) . time() . $file_name),
			"watermark_url" 	=> url('upload/videos/' . md5($user_id) . time() . $file_name),
		];

		return Video::create($create);
	}

	public function deleteVideo($id)
	{
		Video::find($id)->delete();
	}
}