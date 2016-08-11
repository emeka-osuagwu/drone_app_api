<?php

namespace App\Http\Repos;

use App\Model\VideoRequest;

class VideoRequestRepo
{
	public function getAllPostCategories()
	{
		return PostCategories::all();
	}

	public function createVideoRequest($data)
	{
		$create = [
			"title" 		=> $data['title'],
			"date" 			=> $data['date'],
			"user_id" 		=> $data['date'],
			"budget" 		=> $data['budget'],
			"address" 		=> $data['address'],
			"length" 		=> $data['length'],
			"category_id" 	=> $data['category_id'],
			"description" 	=> $data['description'],
		];

		VideoRequest::create($create);
	}

	public function deleteCategory($id)
	{
		PostCategories::where('id', $id)->delete();
	}
}