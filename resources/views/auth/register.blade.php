@extends('layouts.master')

@section('title')

<title>Sign Up</title>

@stop

@section('content')

	<main class="container">
		<h1>Sign Up</h1>
		<form method="POST" action="/auth/register">
	    {!! csrf_field() !!}

	    <div>
	        Name
	        <input type="text" name="name" value="{{ old('name') }}">
	    </div>

	    <div>
	        Email
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>

	    <div>
	        Password
	        <input type="password" name="password">
	    </div>

	    <div>
	        Confirm Password
	        <input type="password" name="password_confirmation">
	    </div>

	    <div>
	        <button type="submit">Register</button>
	    </div>
	</form>


	</main>

@stop