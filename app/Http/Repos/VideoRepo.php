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

	public function uploadVideo($data)
	{
		$create = [
			"url"			=> "https://www.youtube.com/watch?v=5uvxslq63k0",
			"title" 		=> $data['title'],
			"user_id" 		=> $data['user_id'],
			"description" 	=> $data['description'],
		];
		return $create;
		Video::create($create);
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