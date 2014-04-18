@extends('layouts.master')

@section('content')

<div class="container">
@if (empty($post->id))

	<h1 class="blog-title">Create New Post</h1>
	<hr>
	{{ Form::open(array('action' => 'PostsController@store', 'files' => true, 'class' => 'form-horizontal')) }}

@else

	<h1 class="blog-title">Edit Post</h1>
	<hr>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal')) }}

@endif

	<div class="blog-post-title">
		<div class="form-group">
		     {{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
		    <div class="col-sm-10">
		      {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
		      {{ $errors->first('title', '<p><span class="help-block">:message</span></p>') }}
		    </div>
		</div>
		<div class="form-group">
		    {{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
		    <div class="col-sm-10">
		      {{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5')) }}
		      {{ $errors->first('body', '<p><span class="help-block">:message</span></p>') }}
		    </div>
		</div>
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
    			{{ Form::file('image') }}
				<br>
		      	<button type="submit" class="btn btn-default">Submit</button>
		    </div>
		</div>
	</div>
	{{ Form::close() }}
</div>
@stop

@section('bottomscript')

	<script>
	    // Replace the body with a CKEditor
	    // instance, using default configuration.
	    CKEDITOR.replace( 'body' );
	</script>
		
@stop