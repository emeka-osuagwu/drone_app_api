<?php

namespace App\Http\Config;

use Carbon\Carbon;

class JWTConfig
{
    public function __construct()
    {
        $this->jwt_key              		= getenv('jwt_key');
        $this->jwt_issuer               	= getenv('jwt_issuer');
        $this->jwt_issuer_at            	= time();
        $this->jwt_not_before           	= getenv('jwt_not_before');
        $this->jwt_expiration_time          = time() + 3656500;
    }
    
    /*
    | Return json web token key property 
    */
    public function jwt_key()
    {
        return $this->jwt_key;
    }
    
    /*
    | Return json web token Issuer Claim property 
    */
    public function jwt_issuer ()
    {
        return $this->jwt_issuer;
    }
    
    /*
    | Return json web token Issuer At property
    */
    public function jwt_issuer_at ()
    {
        return $this->jwt_issuer_at;
    }

    /*
    | Return json web token Not Before property
    */
    public function jwt_not_before ()
    {
        return $this->jwt_not_before;
    }

    /*
    | Return json web token Expiration Time property
    */
    public function jwt_expiration_time ()
    {
        return $this->jwt_expiration_time;
    }
}


// jwt_key=anakle_drone_app
// jwt_issuer=anakle_drone_app
// jwt_not_before=anakle_drone_app
