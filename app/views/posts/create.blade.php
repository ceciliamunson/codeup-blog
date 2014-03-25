@extends('layouts.master')

@section('content')

<h1>Create a New Post</h1>
<form class="form-horizontal" role="form" method="POST" action="{{{ action('PostsController@store') }}}">
	<div class="form-group">
			<label for="title">Title</label>
			<input id="title" name="title" type="text" value="{{{ Input::old('title') }}}">
	</div>
	<div class="form-group">
			<label for="body">Body</label>
			<textarea rows="6" name="body" id="body" >"{{{ Input::old('body') }}}"</textarea>
	</div>
	<div class="form-group">
			<input type="submit" value="Create post">
	</div>
</form>
	
@stop