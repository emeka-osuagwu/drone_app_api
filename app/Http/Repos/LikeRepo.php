<?php

namespace App\Http\Repos;

use App\Model\Video;
use Illuminate\Contracts\Filesystem\Filesystem;

class LikeRepo
{
	public function getAllVideo()
	{
		return Video::all();
	}
}