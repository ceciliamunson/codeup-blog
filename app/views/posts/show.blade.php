@extends('layouts.master')

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">{{{$post->title}}}</h2>
	<p class="blog-post-meta">{{{$post->created_at}}}<a href="#">Cecilia</a></p>

	<p>{{{$post->body}}}</p>
</div>
<p><a href="{{{ action('PostController@index') }}}">Return to posts listing</a></p>

@stop