<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();
    	$user->name = 'Cody';
    	$user->email = 'cody@hastings.email';
    	$user->password = env('USER_PASSWORD');
    	$user->save();
        for ($i = 1; $i < 10; $i++){
        	$user = new User();
    		$user->email = 'user'.$i.'@codeup.com';
		    $user->name = 'User' . $i;
		    $user->password = 'password'.$i.'23';
		    $user->save();
        }
    }
}
