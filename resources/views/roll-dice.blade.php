@extends('layouts.master')

@section('title')

<title>Roll the die</title>

@stop
@section('content')
	<h1> Your guess: {{$guess}} </h1>
	<br>

	<h1> rockin, rockin and rollin dice.........dice rolled: {{$randomNumber}} </h1>

	@if($guess == $randomNumber)
		<h1> GREAT GUESS!!!!!! </h1>
	@else
		<h1> AAAWWW TRY AGAIN</h1>
	@endif
@stop