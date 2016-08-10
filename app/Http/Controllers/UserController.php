<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
	public function getAllUser()
	{

	    $response =   [
	        "status"    =>"200",
	        "message"   => "all users",
	    	"data"		=> $this->userRepo->getAllUser(), 
	    ];
		
		return response()->json($response);
	} 

	public function getUser($id)
	{

		$validator = $this->validator->getUserValidation(["id" => $id]);

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
		    
		    $response =  [
		        "status"    => "200",
		        "message"   => "user data",
		    	"data"		=> $this->userRepo->getUserWhere('id', $id),
		    ];
		}
		
		return response()->json($response);
	}

	public function getUserVideo($id)
	{	
		$validator = $this->validator->getUserValidation(["id" => $id]);

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
		    $response =  [
		        "status"    => "200",
		        "message"   => "user data",
		    	"data"		=> $this->videoRepo->getVideoWhere('user_id', $id),
		    ];
		}
		
		return response()->json($response);
	}

	public function getUserPost($id)
	{
		$validator = $this->validator->getUserPostValidation(["id" => $id]);

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else
		{
		    $response =  [
		        "status"    => "200",
		        "message"   => "user data",
		    	"data"		=> $this->postRepo->getPostWhere('user_id', $id)->get(),
		    ];
		}
		
		return response()->json($response);
	}

	public function postCreateAdminUser(Request $request)
	{
		$validator = $this->validator->createAdminUserValidation($request->all());

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput($request->all());
		}
		else
		{
			$request['tmp_password'] = substr(bcrypt($request['name']), 50);
			
			$this->userRepo->createAdminUser($request->all());
			session()->flash('message', 'good');
			return back();
		}
	}

}
