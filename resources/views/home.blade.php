@extends('layouts.master')

@section('title')

<title>Cody Hastings</title>

@stop

@section('content')
	<canvas id="can"></canvas>
<h1 class="header"> National Parks</h1>
<div class="container">
	<div class="row justify-content-md-center">
		<div id="buttonWrap" class="col-md-3">
			<button class="btn btn-success btn-block" id="addBall">Drop a Ball</button>
			<button class="btn btn-success btn-block" id="bigBall">Drop a Big'n</button>
			<button class="btn btn-success btn-block" id="200Balls">Drop lil Balls</button>
			<button class="btn btn-warning btn-block" id="vaccumeBalls">Vaccume</button>
		</div>
	<main class="container">
		<div id="header">Cody Hastings</div>
	</main>
	<div id="whoIAm">
		<div class="whoWhatWhy">Who am I?
			<div class="info">Cody Hastings</div>
			<div class="info">Full Stack Web Developer</div>
			<div class="info">Father of 3</div>
		</div>
		<div class="whoWhatWhy">What do I do?
			<div class="info">I solve problems with my brain!</div>
			<div class="info">I code like a champ!</div>
			<div class="info">I show up on time and work real hard!</div>
		</div>
		<div class="whoWhatWhy">Why do I do it?
			<div class="info">My family is my world</div>
			<div class="info">Building awesome stuff rocks!</div>
		</div>
	</div>

@stop