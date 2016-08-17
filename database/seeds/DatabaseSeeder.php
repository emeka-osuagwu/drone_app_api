<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	$user 			= new User;
    	$user->email 	= "admin@anakle.com";
    	$user->password = "password";
    	$user->role 	= 1;
    	$user->save();
    }
}
