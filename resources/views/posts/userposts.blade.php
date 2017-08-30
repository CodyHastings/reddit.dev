@extends('layouts.master')

@section('title')

<title>{{$user->name}}'s Posts</title>

@stop

@section('content')

	<main class="container">
		<h1>{{$user->name}}'s Posts</h1>
		
		@foreach($posts as $post)
			<h1>{{$post->title}}</h1>
			<p>{{$post->content}}</p>
			<p>By {{$post->user->name}}</p>
			<a href="{{ action('PostsController@show', $post->id) }}">See More</a>
		@endforeach
		<br>
		
	</main>

@stop