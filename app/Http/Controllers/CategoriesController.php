<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
	public function getCategoriesPage()
	{
		$categories = $this->postCategoriesRepo->getAllPostCategories();
		return view('dashboard.pages.create_category', compact('categories'));
	}

	public function postCreateCategory(Request $request)
	{
		$validator = $this->validator->createCategoryValidation($request->all());

		if ($validator->fails())
		{
			return back()->withErrors($validator)->withInput($request->all());
		}
		else
		{
			$this->postCategoriesRepo->createCategory($request->all());
		    session()->flash('message', 'good');
		    return back();
		}
	}

	public function deleteCategory($id)
	{
		$this->postCategoriesRepo->deleteCategory($id);
		session()->flash('category_deleted', 'good');
		return back();
	}
}
