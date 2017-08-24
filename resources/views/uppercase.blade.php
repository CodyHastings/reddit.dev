@extends('layouts.master')

@section('title')

<title>Uppercase</title>

@stop
@section('content')

	<h1> Uppercased word:  {{$upword}} </h1>
<a href="{{action('HomeController@lowercase', array($upword))}}">Lowercased Word</a>


@stop