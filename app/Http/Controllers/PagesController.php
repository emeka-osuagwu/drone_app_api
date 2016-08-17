<?php

namespace App\Http\Controllers;

use Auth;
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

   	public function adminIndex()
   	{
   		return view('dashboard.pages.index');
   	}

   	public function createVideo()
   	{
         $categories = $this->postCategoriesRepo->getAllPostCategories();
   		return view('dashboard.pages.create_video', compact('categories'));
   	}

      public function getCreateUser()
      {
         $admins           = $this->userRepo->getAllUser();
         $all_users        = $this->userRepo->getUserWhere('role', 1)->get();
         $regular_users    = $this->userRepo->getUserWhere('role', 0)->get();
         return view('dashboard.pages.create_user', compact('all_users', 'admins', 'regular_users'));
      }

      public function usersPage(Request $request)
      {
         $users            = $this->userRepo->getAllUser();
         $admins           = $this->userRepo->getUserWhere('role', 1)->get();
         $all_users        = $this->userRepo->getAllUser();
         $regular_users    = $this->userRepo->getUserWhere('role', 0)->get();  
         
         if ($request->has('admins')) 
         {
            $users = $admins;
         }

         if ($request->has('regular_users')) 
         {
            $users = $regular_users;
         }

         return view('dashboard.pages.users', compact( 'users', 'all_users', 'admins', 'regular_users'));
      }

      public function getUser()
      {
         $user = $this->userRepo->getUserWhere('id', Auth::user()->id)->get();
         return view('dashboard.pages.user', compact('user'));
      }

      public function getUserProfile($id)
      {
         $user = $this->userRepo->getUserWhere('id', $id)->get();
         return view('dashboard.pages.user', compact('user'));
      }

      public function searchPage(Request $request)
      {
         if ($request->has('videos')) 
         {
            return 1;
         }
         else
         {
            $videos = $this->postRepo->getAllPost();

         }

         return view('app.pages.search', compact('videos'));
      }

      public function forgotPasswordPage()
      {
         return view('app.pages.forget_password');
      }
}
