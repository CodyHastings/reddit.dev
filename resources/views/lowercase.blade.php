@extends('layouts.master')

@section('title')

<title>lowercase</title>

@stop
@section('content')

	<h1> lowercased word:  {{$lword}} </h1>
	<a href="{{action('HomeController@uppercase', array($lword))}}">Uppercase Word</a>

	<a href="{{action('HomeController@uppercase', array($lword))}}">Uppercase Word</a>


@stop