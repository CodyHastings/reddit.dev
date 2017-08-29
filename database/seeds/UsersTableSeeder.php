<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++){
        	$user = new App\User();
    		$user->email = 'user'.$i.'@codeup.com';
		    $user->name = 'User' . $i;
		    $user->password = Hash::make('password'.$i.'23');
		    $user->save();
        }
    }
}
