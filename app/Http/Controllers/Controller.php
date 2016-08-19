<?php

namespace App\Http\Controllers;

use App\Http\Repos\UserRepo;
use App\Http\Repos\LikeRepo;
use App\Http\Repos\PostRepo;
use App\Http\Repos\TokenRepo;
use App\Http\Repos\VideoRepo;
use App\Http\Repos\CommentRepo;
use App\Http\Repos\CloudderRepo;
use App\Http\Repos\ValidationRepo;
use App\Http\Repos\VideoRequestRepo;
use App\Http\Repos\PostCategoriesRepo;
use App\Http\Repos\PaymentRepo;

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
        $this->validator    = new ValidationRepo;
        $this->tokenRepo    = new TokenRepo;
    	$this->videoRepo 	= new VideoRepo;
        $this->commentRepo  = new CommentRepo;
        $this->cloudderRepo         = new CloudderRepo;
        $this->videoRequestRepo     = new VideoRequestRepo;
        $this->postCategoriesRepo   = new PostCategoriesRepo;
    	$this->paymentRepo          = new PaymentRepo;

        $this->middleware('auth', ['except' => [
            'login',
            'register',
            'postLogin',
            'searchPage',
            'previewVideo',
            'postRegister',
            'forgotPasswordPage',
        ]]);
    }
}
