<?php

namespace JWT;

use Carbon\Carbon;

class jwt
{
    public function __construct()
    {
        $this->jwt_key              = getenv('jwt_key');
        $this->jwt_issuer               = getenv('jwt_issuer');
        $this->jwt_issuer_at            = Carbon::now();
        $this->jwt_not_before           = getenv('jwt_not_before');
        $this->jwt_expiration_time          = Carbon::now()->addMinutes(5);
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