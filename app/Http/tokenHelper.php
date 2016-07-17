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
   	return User::where('email', requestTokenUserData($token)->email)->count();
}


function FunctionName($value='')
{
	# code...
}

