<?php

namespace App\Http\Repos;

use App\Model\Video;
use transloadit\Transloadit;
use Illuminate\Contracts\Filesystem\Filesystem;

class VideoRepo
{

	public function uploadVideo($data)
	{
		$create = [
			"name" 			=> $data['name'],
			"url"			=> $data['url'],
			"description" 	=> $data['description'],
		];
		
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