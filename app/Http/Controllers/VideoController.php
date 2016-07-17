<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class VideoController extends Controller
{

	public function postUpdateVideo(Request $request)
	{
		dd('video');
		return $file = $request->file('video');
	}

}
