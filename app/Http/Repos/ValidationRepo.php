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
				'file' 	=> 'required|max:3500|mimes:mp4,mp3',
			]);

			return $validator;
		}

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

	public function getUserPostValidation($data)
	{	
		$validator = Validator::make($data, [
			'id' => 'required|exists:users',
		]);

		return $validator;
	}

	/*=========================================
	User Validation
	==========================================*/

	/*=========================================
	Post Validation
	==========================================*/

		public function createPostValidation($data)
		{	
			$validator = Validator::make($data, [
				'title' 		=> 'required|max:10|min:4|unique:posts',
				'description' 	=> 'required|max:20|min:4|unique:posts',
				// 'video_id' 		=> 'required|exists:videos|numeric',
				// 'user_id' 		=> 'required|exists:users|numeric',
			]);

			return $validator;
		}

		public function likePostValidation($data)
		{	
			$data['id'] = $data['post_id'];

			$validator = Validator::make($data, [
				'id' 		=> 'required|exists:posts',
				'user_id' 	=> 'required|exists:posts',
			]);

			return $validator;
		}

		public function postCommentValidation($data)
		{	
			$data['id'] = $data['post_id'];

			$validator = Validator::make($data, [
				'id' 		=> 'required|exists:posts',
				'user_id' 	=> 'required|exists:posts',
				'comment' 	=> 'required|max:30',
			]);

			return $validator;
		}

		public function postDeleteCommentValidation($data)
		{	
			$data['id'] = $data['post_id'];

			$validator = Validator::make($data, [
				'id' 		=> 'required|exists:posts',
				'user_id' 	=> 'required|exists:posts',
			]);

			return $validator;
		}
}