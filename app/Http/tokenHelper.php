<?php

use App\User;
use Firebase\JWT\JWT;
use App\Http\Config\JWTConfig;

function requestTokenUserData($token)
{
	$jwtConfig 				= new JWTConfig;
    return $decoded_jwt 	= JWT::decode($token, $jwtConfig->jwt_key(), ['HS512'])->user_data; 
}

function checkRequestTokenUserExist($token)
{
   	return User::where([
   				['email', '=', requestTokenUserData($token)->email],
   				['id', '=', requestTokenUserData($token)->id],
   		])->count();
}

function checkRequestTokenUserIsAdmin($token)
{
	$user = User::find(requestTokenUserData($token)->id);
	
	if ( (int) $user->role == 1) 
	{
		return true;
	}
	else
	{
		return false;
	}
}
