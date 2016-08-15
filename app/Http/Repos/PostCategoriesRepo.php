<?php

namespace App\Http\Repos;

use App\Model\PostCategories;
use App\Http\Repos\CloudderRepo as CloudderRepo;

class PostCategoriesRepo extends CloudderRepo
{
	public function getAllPostCategories()
	{
		return PostCategories::all();
	}

	public function createCategory($data)
	{
		$create = [
			"name" 			=> $data['name'],
			"description" 	=> $data['description'],
			"image" 		=> $this->getImageUrl(),
		];

		if ( ! isset($data['image']) ||$data['image'] != '' ) 
		{
			$create['image'] = "http://placehold.it/200x100"; 	
		}

		PostCategories::create($create);
	}

	public function deleteCategory($id)
	{
		PostCategories::where('id', $id)->delete();
	}
}