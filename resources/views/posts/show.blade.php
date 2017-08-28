@extends('layouts.master')

@section('title')

<title>Single Post</title>

@stop

@section('content')

	<main class="container">
		<h1>This Post</h1>

		<h2>{{$post['title']}}</h2>
		<h3>{{$post['content']}}</h3>
		<p>posted on {{$post->created_at->format('l, F jS Y')}}</p>
		<p>Last updated on {{$post->updated_at->format('l, F jS Y')}}</p>

		<a href="{{ action('PostsController@edit', $post->id) }}">Edit</a>


		
	</main>

@stop