<?php

namespace App\Http\Repos;

use Carbon\Carbon;
use Firebase\JWT\JWT;
use App\Http\Config\JWTConfig;

class TokenRepo
{
    public function __construct()
    {
        $this->jwtConfig = new JWTConfig;
    }

    /*================================
    # User Login Token
    =================================*/
    public function loginToken($data)
    {
        $key    = $this->jwtConfig->jwt_key();

        $token  = 
        [
            "iss"   => $this->jwtConfig->jwt_issuer(),
            "iat"   => $this->jwtConfig->jwt_issuer_at(),
            "nbf"   => $this->jwtConfig->jwt_not_before(),
            "exp"   => $this->jwtConfig->jwt_expiration_time(),
            "data"  => 
            [
                "id"        => $data["id"],
                "email"     => $data['email']
            ]
        ];

        return $encode_jwt     = JWT::encode($token, $key, 'HS512');
    }
}