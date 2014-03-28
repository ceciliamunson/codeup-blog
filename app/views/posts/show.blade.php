@extends('layouts.master')

@section('content')
<div class="container">
	<div class="blog-post">
		<h2 class="blog-post-title">{{{$post->title}}}</h2>
		<p class="blog-post-meta">{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}  by <a href="#">Cecilia Munson</a></p>
	
		<p>{{{$post->body}}}</p>
	</div>
	<p><a href="{{{ action('PostsController@index') }}}">Return to posts listing</a></p>
	<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit the Post</a> |
	<a href="#" id="btnDeletePost">Delete Post</a>
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'deleteFormPost')) }}
	{{ Form::close() }}
</div>

<script>

$('#btnDeletePost').on('click', function (e) {
	e.preventDefault();
	if (confirm('Are you sure you want to delete this post?')) {
		$('#deleteFormPost').submit();
	}
}
</script>

@stop
