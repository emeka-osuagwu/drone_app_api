<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   	
   	public function register()
   	{
   		return view('app.pages.register');
   	} 	

   	public function login()
   	{
   		return view('app.pages.login');
   	}
}
