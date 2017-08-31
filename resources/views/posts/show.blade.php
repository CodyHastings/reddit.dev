@extends('layouts.master')

@section('title')

<title>Single Post</title>

@stop

@section('content')

	<main class="container">
		<h1>This Post</h1>

		<h2>{{$post['title']}}</h2>
		<a href="{{action('PostsController@upvote',$post->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
        <a href="{{action('PostsController@downvote',$post->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
		<h3>{{$post['content']}}</h3>
		<p>Posted By {{$post->user->name}}</p>
		<p>Posted on {{$post->created_at}}</p>
		<p>Last updated on {{$post->updated_at}}</p>
		@if (Auth::id() == $post->user_id)
		<a href="{{ action('PostsController@edit', $post->id) }}">Edit</a>
		@endif


		
	</main>

@stop