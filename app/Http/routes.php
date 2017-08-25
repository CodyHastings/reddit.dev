<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/uppercase/{word}', 'HomeController@uppercase');

Route::get('/lowercase/{word}', 'HomeController@lowercase');

Route::get('/increment/{number}', 'HomeController@increment');

Route::resource('posts', 'PostsController');

Route::get('/random', function (){
	return rand(1, 6);
});

Route::get('/roll-dice/{guess}', function ($guess){
	$randomNumber = rand(1, 6);
	$data['randomNumber'] = $randomNumber;
	$data['guess'] = $guess;

	return view('roll-dice', $data);
});