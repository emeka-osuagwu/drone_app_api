<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function vidoes()
    {
       return $this->hasMany('App\Model\Videos');
    }

    /*================================
    # Create User
    # Fires UserCreated Event
    =================================*/
    public static function createUser($attributes)
    {
        $user =  static::create($attributes);
        event(new UserCreated($user));
    }
    

}
