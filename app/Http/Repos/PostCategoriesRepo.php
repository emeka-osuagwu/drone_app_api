<?php

namespace App\Http\Repos;

use App\Model\PostCategories;

class PostCategoriesRepo
{
	public function getAllPostCategories()
	{
		return PostCategories::all();
	}
}