<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table        = 'users';
    protected $primaryKey   = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'city', 
        'role', 
        'password',
        'last_name', 
        'first_name', 
        'description', 
        'access_level', 
        'profile_status', 
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

    public function vidoe()
    {
       return $this->hasMany('App\Model\Video', 'id');
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
