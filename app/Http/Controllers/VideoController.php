<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class VideoController extends Controller
{

	public function postUpdateVideo(Request $request)
	{
		$file = $request->file('video');
	}

}
