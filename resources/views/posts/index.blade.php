@extends('layouts.master')

@section('title')

<title>All Posts</title>

@stop

@section('content')

	<main class="container">
		<h1>All Posts</h1>


		@foreach($posts as $post)
			<h1>{{$post->title}}</h1>
			<p>{{$post->content}}</p>
			<a href="{{ action('PostsController@show', $post->id) }}">See More</a>
		@endforeach
		<br>
		{!! $posts->render() !!}
	</main>

@stop