@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="blog-post">
			<h2 class="blog-post-title">{{{$post->title}}}</h2>
			<p><img src="{{{ $post->image_path }}}"></p>
			<p class="blog-post-meta">{{{ $post->created_at->format('l, F jS Y') }}}  by <a href="#">Cecilia</a></p>	
			<p>{{$post->body}}</p>
		</div>
		<p><a href="{{{ action('PostsController@index') }}}">Return to posts listing</a></p>
		<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a> |
		<a href="{{{ action('PostsController@destroy', $post->id) }}}" id="btnDeletePost">Delete Post</a>
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'deleteFormPost')) }}
		{{ Form::close() }}

		<!-- Disqus comment section -->
		<div id="disqus_thread"></div>
    	<div id="disqus_thread"></div>
    	<script type="text/javascript">
    	   
    	    var disqus_shortname = 'cecilia-munson-blog'; 
	
    	    /* * * DON'T EDIT BELOW THIS LINE * * */
    	    (function() {
    	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    	        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
    	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    	    })();
    	</script>
    	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    	<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	</div>

@stop

@section('bottomscript')	
	<script>

	$('#btnDeletePost').on('click', function (e) {
		e.preventDefault();
		if (confirm('Are you sure you want to delete this post?')) {
			$('#deleteFormPost').submit();
		}
	});

	</script>

@stop
