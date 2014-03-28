@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
	<div class="blog-title">
		<a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a>
		<p class="form-group">{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}  by <a href="#">Cecilia Munson</a></p>
	
		<p>{{{ Str::words($post->body, 20) }}}</p>
	</div>
	
@endforeach

{{ $posts->links() }}

<p>
	<a href="{{{ action('PostsController@create') }}}">Create New Post</a>
</p>



@stop