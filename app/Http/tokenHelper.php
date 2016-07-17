<?php

use JWT
use App\Http\Config\JWTConfig;

function checkUserRequestToken($token)
{
	$jwtConfig = new JWTConfig;
    return $decoded_jwt = JWT::decode($token, $jwtConfig->key, array('HS512')); 
}