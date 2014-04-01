@extends('layouts.master')

@section('content')

<div class="container">
    <div class="blog-header">
    	<h1 class="blog-title">Cecilia's Blog</h1>
    	<p class="lead blog-description">My experience becoming a web developer at Codeup.</p>
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
        	<div class="blog-post">
          		<hr>
          		{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', )) }}
          		  {{ Form::label('search', 'Search Posts') }}
          		  {{ Form::text('search') }}
          		  {{ Form::submit('Search') }}
          		{{ Form::close() }}

        		@foreach ($posts as $post)
        		  <h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
        		  <p class="blog-post-meta">{{{ $post->created_at->format('l, F jS Y') }}}  by <a href="#">Cecilia Munson</a></p>
        		  <p>{{ Str::words($post->body, 20) }}</p>
        		
        		@endforeach
		
        		{{ $posts->appends(array('search' => Input::get('search')))->links() }}
      		
        		<p>
        		  <a href="{{{ action('PostsController@create') }}}">Create New Post</a>
        		</p>

          	</div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">April 2014</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div>
@stop