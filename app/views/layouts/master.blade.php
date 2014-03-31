<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
 		    <a class="navbar-brand" href="#">Brand</a>
 		  </div>

 		  <!-- Collect the nav links, forms, and other content for toggling -->
 		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 		    <ul class="nav navbar-nav">
 		      <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
              <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
              <li><a href="{{{ action('HomeController@showContact') }}}">Contact Me</a></li>
 		      <li class="dropdown">
 		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
 		        <ul class="dropdown-menu">
 		          <li><a href="#">Action</a></li>
 		          <li><a href="#">Another action</a></li>
 		          <li><a href="#">Something else here</a></li>
 		          <li class="divider"></li>
 		          <li><a href="#">Separated link</a></li>
 		          <li class="divider"></li>
 		          <li><a href="#">One more separated link</a></li>
 		        </ul>
 		      </li>
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
      <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
  @endif
  @if (Session::has('errorMessage'))
      <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
  @endif
  
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="js/bootstrap.min.js"></script>
    @yield('bottomscript')
</body>
</html>