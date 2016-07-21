<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
	public function getAllUser()
	{

	    $response =   [
	        "status"    =>"501",
	        "message"   => "all users",
	    	"data"		=> $this->userRepo->getAllUser(), 
	    ];
		
		return response()->json($response);
	} 

	public function getUser($id)
	{
		return $this->userRepo->getUserWhere('id', $id);
	}

	public function getUserVideo($id)
	{
		return $this->videoRepo->getVideoWhere('user_id', $id);
	}

}
