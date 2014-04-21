<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/welcome-style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav-justified">
                    <li class="active"><a href="#top">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Resume</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--/.navbar -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1>Cecilia Munson</h1>
            <h3>Full Stack Web Developer</h3>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Subtle Sidebar is the Perfect Template for your Next Portfolio Website Project!</h2>
                    <p class="lead">This template really has it all. It's up to you to customize it to your liking! It features some fresh photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Services -->
    <div id="services" class="services">
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#pane1" data-toggle="tab">Tab 1</a></li>
                <li><a href="#pane2" data-toggle="tab">Tab 2</a></li>
                <li><a href="#pane3" data-toggle="tab">Tab 3</a></li>
                <li><a href="#pane4" data-toggle="tab">Tab 4</a></li>
            </ul>
            <div class="tab-content">
                <div id="pane1" class="tab-pane active">
                    <h4>The Markup</h4>
                    <pre>Code here ...</pre>
                </div>
                <div id="pane2" class="tab-pane">
                <h4>Pane 2 Content</h4>
                    <p> and so on ...</p>
                </div>
                <div id="pane3" class="tab-pane">
                    <h4>Pane 3 Content</h4>
                </div>
                <div id="pane4" class="tab-pane">
                    <h4>Pane 4 Content</h4>
                </div>
            </div><!-- /.tab-content -->
        </div><!-- /.tabbable -->
    </div><!-- /Services -->

    <!-- Callout -->
    <div class="callout">
        <div class="vert-text">
            <h1>A Dramatic Text Area</h1>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>My Work</h2>
                    <hr>
                </div>
            </div>
            <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol>
                     
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                            </div><!--.row-->
                        </div><!--.item-->
                         
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                            </div><!--.row-->
                        </div><!--.item-->
                         
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-4"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                            </div><!--.row-->
                        </div><!--.item-->
                     
                    </div><!--.carousel-inner-->
                    <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                 
            </div>
        </div><!--.container-->
    </div> <!-- /Portfolio -->

    <!-- Contact -->
    <div id="contact" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Contact Me</h2>
                    <hr>
                </div>
            </div>
            <div class="row links">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <a  target="_blank" href="http://www.github.com/ceciliamunson"><i class="service-icon fa fa-github fa-3x"></i></a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <a target="_blank" href="http://www.linkedin.com/in/ceciliamunson"><i class="service-icon fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <a  target="_blank" href="http://www.twitter.com/ceciliamunson"><i class="service-icon fa fa-twitter fa-3x"></i></a>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <a href="mailto:cecimunson@gmail.com" data-toggle="modal" data-target="#myModal"><i class="service-icon fa fa-envelope-o fa-3x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->

    <!--Contact modal-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h1 class="text-center">Send me a message</h1>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" accept-charset="utf-8" class="form col-md-12 center-block">
                    <div class="form-group">
                        <input class="form-control input-lg" name="firstname" placeholder="First name" type="text" required autofocus />
                    </div>
                    <div class="form-group">
                        <input class="form-control input-lg" name="lastname" placeholder="Last name" type="text" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control input-lg" name="email" placeholder="E-mail" type="text" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control input-lg" name="subject" placeholder="Subject" type="text" required />
                    </div>
                    <div class="row">
                        <textarea style="resize:vertical;" class="form-control input-lg" placeholder="Message..." rows="6" name="comment" required></textarea>
                    </div>  
                </div>
                <div class="panel-footer">
                    <input type="submit" class="btn btn-default" value="Send"/>
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact modal -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-arrow-circle-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <!-- <p>Copyright &copy; Company 2013</p> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>

    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    <!-- Portfolio caruosel -->
    <script>
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 5000
        })
    });

    </script>

    <!-- Contact modal -->
    <script>
    $(document).ready(function() {
        var panels = $('.vote-results');
        var panelsButton = $('.dropdown-results');
        panels.hide();
    
        //Click dropdown
        panelsButton.click(function() {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);
    
            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function() {
                //Completed slidetoggle
                if(idFor.is(':visible'))
                {
                    currentButton.html('Hide Results');
                }
                else
                {
                    currentButton.html('View Results');
                }
            })
        });
    });
</script>

</body>

</html>