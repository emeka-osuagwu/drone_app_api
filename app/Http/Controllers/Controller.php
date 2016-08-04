<?php

namespace App\Http\Controllers;

use App\Http\Repos\UserRepo;
use App\Http\Repos\LikeRepo;
use App\Http\Repos\PostRepo;
use App\Http\Repos\TokenRepo;
use App\Http\Repos\VideoRepo;
use App\Http\Repos\ValidationRepo;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
    	$this->userRepo 	= new UserRepo;
    	$this->postRepo 	= new PostRepo;
    	$this->likeRepo 	= new LikeRepo;
    	$this->videoRepo 	= new VideoRepo;
    	$this->tokenRepo 	= new TokenRepo;
    	$this->validator 	= new ValidationRepo;
    }
}
