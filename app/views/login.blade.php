@extends('layouts.master')

@section('content')

	<div class="container">
	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => "form-signin")) }}
	  	<h2 class="form-signin-heading">Please sign in</h2>
	  	<div class="form-group">
			<!-- <div class="col-lg-12"> -->
				{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email address')) }}
	  			{{ $errors->first('email', '<p><span class="help-block">:message</span></p>') }}
	  		<!-- </div> -->
	  	</div>	
	  	<div class="form-group">
			<!-- <div class="col-lg-12"> -->
				{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
	  			{{ $errors->first('password', '<p><span class="help-block">:message</span></p>') }}
	  		<!-- </div> -->
	  	</div>
	  	<!-- <div class="col-lg-12"> -->
	  		<div class="form-group">
	  			{{ Form::label('remember', 'Remember me', array('class' => 'checkbox', 'style' => 'display:inline')) }}
	  			{{ Form::checkbox('remember', 'remember-me') }}
	  		</div>
	  	<!-- </div> -->
	  	{{ Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block')) }}
	{{ Form::close() }}
	</div>

	
@stop


