@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
<div class="blog-post">
	<a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
	<p class="blog-post-meta">{{{ $post->created_at }}}<a href="#">Cecilia</a></p>

	<p>{{{ $post->body }}}</p>
</div>
@endforeach
<p>
	<a href="{{{ action('PostsController@create') }}}">Create New Post</a>

@stop