@extends('layouts.master')

@section('title')

<title>All Posts</title>

@stop

@section('content')

	<main class="container">
		<h1>All Posts</h1>
	

		@foreach($posts as $post)
			<h1>{{$post->title}}</h1>
			<a href="{{action('PostsController@upvote',$post->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
            <a href="{{action('PostsController@downvote',$post->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			<p>{{$post->content}}</p>
			<p>By {{$post->user->name}}</p>
			<a href="{{ action('PostsController@show', $post->id) }}">See More</a>
		@endforeach
		<br>

	
		{!! $posts->appends(Request::except('page'))->render() !!}

	</main>

@stop