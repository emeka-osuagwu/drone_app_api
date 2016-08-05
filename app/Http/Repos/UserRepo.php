<?php

namespace App\Http\Repos;

use App\User;

class UserRepo
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
		return User::where($field, $value)->get();
	}

	/*=========================================
	Create save user object into the database
	==========================================*/
	public function createUser($data)
	{
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
}