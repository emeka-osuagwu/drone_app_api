<?php

namespace App\Http\Repos;

use Validator;

class ValidationRepo
{
	public function createUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'email' 		=> 'required|unique:users|email',
			'password' 		=> 'required|max:20|min:4',
		]);

		return $validator;
	}

	public function loginUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'email' 		=> 'required|exists:users|email',
			'password' 		=> 'required',
		]);

		return $validator;
	}

	public function loginAdminValidation($data)
	{	
		$validator = Validator::make($data, [
			'email' 		=> 'required|exists:admins|email',
			'password' 		=> 'required|max:20|min:4',
		]);

		return $validator;
	}


	/*=========================================
	Video Validation
	==========================================*/
		public function uploadVideoValidation($data)
		{	
			$validator = Validator::make($data, [
				'file' 	=> 'required',
				'id' 	=> 'required|exists:users',
			]);

			return $validator;
		}

		// public function uploadVideoValidation($data)
		// {	
		// 	$validator = Validator::make($data, [
		// 		'title' 		=> 'required|max:10|min:4|unique:videos',
		// 		'description' 	=> 'required|max:20|min:4|unique:videos',
		// 	]);

		// 	return $validator;
		// }

		public function deleteVideoValidation($data)
		{	
			$validator = Validator::make($data, [
				'id' 	=> 'required|exists:videos',
			]);

			return $validator;
		}
		
		public function getSingleVideoValidation($data)
		{	
			$validator = Validator::make($data, [
				'id' 	=> 'required|exists:videos',
			]);

			return $validator;
		}
	/*=========================================
	Video Validation
	==========================================*/


	/*=========================================
	User Validation
	==========================================*/
	public function getUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'id' 	=> 'required|exists:users',
		]);

		return $validator;
	}

	/*=========================================
	User Validation
	==========================================*/
}