@extends('layouts.master')

@section('content')
<div class="container">
	<h1 style="margin-left:120px;">Create a New Post</h1>
	
	<form class="form-horizontal" role="form" method="POST" action="{{{ action('PostsController@store') }}}">
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title" name="title" value="{{{ Input::old('title') }}}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	      <textarea rows="6" class="form-control" id="body" name="body">"{{{ Input::old('body') }}}"</textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create New Post</button>
	    </div>
	  </div>
	</form>
</div>
	
@stop