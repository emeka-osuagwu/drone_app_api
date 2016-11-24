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
		$file 						= $file_data;
		$file_size 					= $file->getClientSize();
		$file_name 					= $file->getClientOriginalName();
		$file_is_valid 				= $file->isValid();
		$file_extension 			= $file->getExtension();
		$file_error_message 		= $file->getErrorMessage();
		$video_destination_path 	= public_path() . "/upload/videos";
		$image_destination_path 	= public_path() . "/upload/images";
		$watermark 					= md5($user_id) . time() . 'watermark' . '.webm' ;
		$video_name 				= md5($user_id) . time() . $file_name;
		$image_name 				= md5($user_id) . time() . $file_name . '.jpg';

		#====================================================
		# get image from video
		$ffmpeg = \FFMpeg\FFMpeg::create();
		$video 	= $ffmpeg->open($file);
		$video
			->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(20))
			->save($image_destination_path . '/' . $image_name);

		#====================================================
		# get image from video
		$ffmpeg = \FFMpeg\FFMpeg::create();
		$video 	= $ffmpeg->open($file);
		$video
		    ->filters()
		    ->clip(\FFMpeg\Coordinate\TimeCode::fromSeconds(0), \FFMpeg\Coordinate\TimeCode::fromSeconds(5))
		    ->watermark('/home/emeka/Desktop/anakle.jpg', array(
		        'position' => 'relative',
		        'bottom' => 300,
		        'right' => 300,
		    ));

		$video->save(new \FFMpeg\Format\Video\WebM(), $video_destination_path . '/' . $watermark);

		$create = [
			"user_id" 			=> $user_id,
			"thumbnail" 		=> url('upload/images/' . $image_name),
			"original_url" 		=> url('upload/videos/' . $video_name),
			"watermark_url" 	=> url('upload/videos/' . $watermark),
		];
		
		$file->move($video_destination_path, $video_name);

		return Video::create($create);
	}

	public function deleteVideo($id)
	{
		Video::find($id)->delete();
	}
}