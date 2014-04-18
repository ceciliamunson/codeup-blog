<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="/ckeditor/ckeditor.js"></script>
    
    @yield('topscript')
  </head>
  <body>

    <nav class="navbar navbar-inverse" role="navigation">
 		<div class="container">
 		  <!-- Brand and toggle get grouped for better mobile display -->
 		  <div class="navbar-header">
 		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 		      <span class="sr-only">Toggle navigation</span>
 		      <span class="icon-bar"></span>
 		      <span class="icon-bar"></span>
 		      <span class="icon-bar"></span>
 		    </button>
 		  </div>

 		  <!-- Collect the nav links, forms, and other content for toggling -->
 		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 		    <ul class="nav navbar-nav">
          <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
 		      <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
          <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
          <li><a href="{{{ action('HomeController@showContact') }}}">Contact Me</a></li>
          @if (Auth::check())
          <li><a href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->first_name }}})</a></li>
          @else
          <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
          @endif
 		    </ul>
 		    <form class="navbar-form navbar-left" role="search">
 		      <div class="form-group">
 		        <input type="text" class="form-control" placeholder="Search">
 		      </div>
 		      <button type="submit" class="btn btn-default">Submit</button>
 		    </form>
 		    
 		  </div><!-- /.navbar-collapse -->
 		</div><!-- /.container-fluid -->
	</nav>

  @if (Session::has('successMessage'))
      <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span>{{{ Session::get('successMessage') }}}</strong></div>
  @endif
  @if (Session::has('errorMessage'))
      <div class="alert alert-danger"><strong><span class="glyphicon glyphicon-alert"></span>{{{ Session::get('errorMessage') }}}</strong></div>
  @endif
  
    @yield('content')

    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'cecilia-munson-blog'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    @yield('bottomscript')
</body>
</html>