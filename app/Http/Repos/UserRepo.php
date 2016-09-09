<?php

namespace App\Http\Repos;

use App\User;
use App\Http\Repos\CloudderRepo as CloudderRepo;

class UserRepo extends CloudderRepo
{

	public function getAllUser()
	{
		return User::all();
	}	

	/*=========================================
	Get User where
	==========================================*/
	public function getUserWhere($field, $value)
	{
		return User::with('downloads')->where($field, $value);
	}

	/*=========================================
	Create save user object into the database
	==========================================*/
	public function createUser($data)
	{

		// $data['image'] = $this->getImageUrl();

		User::create($data);
	}

	/*=========================================
	Create admin user
	==========================================*/
	public function createAdminUser($data)
	{
		$create = [
			"role"		=> $data['role'],
			"email"		=> $data['email'],
			"password"	=> $data['tmp_password'],
		];

		User::create($create);
	}

	public function updateUser($data)
	{
	    $update = [
	        "email"             => $data['email'],
	        "city"              => $data['city'],
	        "phone"             => $data['phone'],
	        "last_name"         => $data['last_name'],
	        "first_name"        => $data['first_name'],
	        "description"       => $data['description'],
	        "profile_status"    => 1,
	    ];

	    if (isset($data['image'])  && isset($data['image']) != '' ) 
	    {
	    	$update['image'] = $this->getImageUrl();
	    }

	    User::where('id', $data['user_id'])->update($update);
	}
}