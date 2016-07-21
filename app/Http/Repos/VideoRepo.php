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

	public function uploadVideo($data)
	{
		$create = [
			"url"			=> "https://www.youtube.com/watch?v=5uvxslq63k0",
			"title" 		=> $data['title'],
			"user_id" 		=> $data['user_id'],
			"description" 	=> $data['description'],
		];

		Video::create($create);
	}

	public function deleteVideo($id)
	{
		Video::find($id)->delete();
	}

	// public function uploadVideo($file)
	// {
	// 	$transloadit = new Transloadit(array(
	// 	  'key'    => '51fa1bf04a7a11e686fc59a6c9e3944a',
	// 	  'secret' => '75933e456ae57de0600801b651c1f171eee256ea',
	// 	));

	// 	$response = $transloadit->createAssembly([
	// 		'files' 	=> [$file],
	// 		'params' 	=> [
	// 			'steps' => [
	// 				'resize_to_125' => [
	// 					'robot'  => '/image/resize',
	// 					'width'  => 125,
	// 					'height' => 125,
	// 				],
	// 			],
	// 		],
	// 	]);

	// 	return $response;
	// }
}