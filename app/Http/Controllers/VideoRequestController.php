<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VideoRequestController extends Controller
{	
	public function getCreateVideoRequest()
	{
		$categories = $this->postCategoriesRepo->getAllPostCategories();

		return view('app.pages.request_video', compact('categories'));
	}

	public function postCreateVideoRequest(Request $request)
	{
		$validator = $this->validator->createVideoRequestValidation($request->all());

		if ($validator->fails())
		{
		    return back()->withErrors($validator)->withInput($request->all());
		}
		else
		{
		    $this->videoRequestRepo->createVideoRequest($request->all());
		    session()->flash('message', 'good');
		    return back();
		}
	}
}
