<?php

use App\Model\Post;

function load_asset($asset_url)
{
    return ( env('APP_ENV') === 'production' ) ? secure_asset($asset_url) : asset($asset_url);
}
function domain_name()
{
    return Request::root();
}

function getAddress($request_uri = null)
{
        /*** check for https ***/
    $protocol = 'http';
    /*** return the full address ***/
    if($request_uri){
         return $protocol.'://'.$_SERVER['HTTP_HOST'];
    }
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function checkUserPaidForVideo($user_id, $video_id)
{
	$video 			=  Post::with('paid_user')->where('id', $video_id)->get()->toArray()[0];
	$paid_user_ids 	= array_pluck($video['paid_user'], 'id');

	if (array_has($paid_user_ids, $user_id)) 
	{
	 	return true;
	}
	else
	{
		return false;
	}
}