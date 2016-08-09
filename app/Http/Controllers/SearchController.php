<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function search(Request $request)
	{
		if ($request['post']) 
		{
			return $this->searchVideo($request['video']);
		}
	}

	public function searchVideo($query)
	{
		$searchTerms = explode(' ', $query);

		$table = \DB::table('posts');

		foreach($searchTerms as $term)
		{
		    $table->where('title', 'LIKE', '%'. $term .'%');
		}

		$response =  [
		    "status"    => "200",
			"data"		=> $table->get(),
		];

		return response()->json($response);
	}
}
