<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function sayHello($name)
    {
        $data = array('name' => $name);
        return view('my-first-view', $data);
    }

    public function uppercase($word)
    {
    $upword = strtoupper($word);
	$data['upword'] = $upword;
	return view('uppercase', $data);
    }

    public function lowercase($word)
    {
    $lword = strtolower($word);
	$data['lword'] = $lword;
	return view('lowercase', $data);
    }

    public function increment($number)
   	{
   		return $number + 1;
   	}
}
