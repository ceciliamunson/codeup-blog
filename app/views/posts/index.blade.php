@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
	<div class="blog-title">
		<a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
		<p class="form-group">{{{ $post->created_at }}}<a href="#">Cecilia</a></p>
	
		<p>{{{ $post->body }}}</p>
	</div>
	<p>
		<!-- <a href="{{{ action('PostsController@update') }}}">Update Post</a> -->
	</p>
@endforeach

<p>
	<a href="{{{ action('PostsController@create') }}}">Create New Post</a>
</p>
<p>
	<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit the Post</a>
</p>


@stop