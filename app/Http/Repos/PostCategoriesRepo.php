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


		if (isset($data['image']) && isset($data['image']) != null) {
			$create['image'] = 1;
		}
			
		$create = [
			"name" 			=> $data['name'],
			"image" 		=> "http://placehold.it/200x100",
			"description" 	=> $data['description'],
		];


		PostCategories::create($create);
	}

	public function deleteCategory($id)
	{
		PostCategories::where('id', $id)->delete();
	}
}