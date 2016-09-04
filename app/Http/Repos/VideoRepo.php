<?php

namespace App\Http\Repos;

use App\Model\Video;
use transloadit\Transloadit;
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
		$file 						= $file_data;
		$file_size 					= $file->getClientSize();
		$file_name 					= $file->getClientOriginalName();
		$file_is_valid 				= $file->isValid();
		$file_extension 			= $file->getExtension();
		$file_error_message 		= $file->getErrorMessage();
		$video_destination_path 	= public_path() . "/upload/videos";
		$image_destination_path 	= public_path() . "/upload/images";
		$video_name 				= md5($user_id) . time() . $file_name;
		$image_name 				= md5($user_id) . time() . $file_name . '.jpg';

		$file->move($video_destination_path, $video_name);

		$ffmpeg = \FFMpeg\FFMpeg::create();
		$video = $ffmpeg->open("/home/emeka/Downloads/Funny Cat Videos - 1 minute Watch it -))).mp4");
		$video
		    ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(10))
		    ->save($image_destination_path . '/' . $image_name);

		$create = [
			"user_id" 			=> $user_id,
			"thumbnail" 		=> url('upload/images/' . $image_name),
			"original_url" 		=> url('upload/videos/' . $video_name),
			"watermark_url" 	=> url('upload/videos/' . $video_name),
		];

		return Video::create($create);
	}

	public function deleteVideo($id)
	{
		Video::find($id)->delete();
	}
}


		// $steps = [
		// 	"flash_encoding" => [
		// 		"use" 		=> ":original",
		// 		"rebot" 	=>  "/video/encode",
		// 		"ffmpeg_stack" => "v2.2.3",
		// 		"preset" => "flash",
		// 		"width" => 640,
		// 		"height" => 480
		// 	],

		// 	"extracted_thumbs" => [
		// 		"use" => "flash_encoding",
		// 		"robot" => "/video/thumbs",
		// 		"count" => 10
		// 	],

		// 	"big" => [
		// 		"use" => "extracted_thumbs",
		// 		"robot" => "/image/resize",
		// 		"result" => true,
		// 		"width" => "120",
		// 	]
		// ];



		// $response = $transloadit->createAssembly([
		// 	"files"		=> ["/home/emeka/Downloads/Funny Cat Videos - 1 minute Watch it -))).mp4"],
			
		// 	"params"	=> [

		// 		"steps"	=> [$steps],
		// 	]

		// ]);
		
		// dd($response);