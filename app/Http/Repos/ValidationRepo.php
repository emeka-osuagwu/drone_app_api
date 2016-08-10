<?php

namespace App\Http\Repos;

use Validator;

class ValidationRepo
{


	/*=========================================
	User Validation
	==========================================*/
		public function createUserValidation($data)
		{	
			$validator = Validator::make($data, [
				'email' 		=> 'required|unique:users|email',
				'password' 		=> 'required|max:20|min:4',
			]);

			return $validator;
		}

		public function createAdminUserValidation($data)
		{	
			$validator = Validator::make($data, [
				'role'			=> 'required|int',
				'email' 		=> 'required|unique:users|email',
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
	Video Validation
	==========================================*/
		public function uploadVideoValidation($data)
		{	
			$validator = Validator::make($data, [
				'file' 	=> 'required|max:3500|mimes:mp4,mp3',

				'title' 		=> 'required|max:30|min:4|unique:posts',
				'tags' 			=> 'required',
				'price' 		=> 'required|int',
				'category' 		=> 'required|int',
				'description' 	=> 'required|max:50|min:4|unique:posts',
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
	Post Validation
	==========================================*/

		public function createPostValidation($data)
		{	
			$validator = Validator::make($data, [
				'title' 		=> 'required|max:30|min:4|unique:posts',
				'description' 	=> 'required|max:50|min:4|unique:posts',
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