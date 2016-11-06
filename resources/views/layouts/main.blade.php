<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="musan - testing project">
        <meta name="author" content="Kamran Yakub.">
        <link rel="icon" href="http://kamfolio.com/wp-content/uploads/2016/09/favicon-1.png">

        <title>MUSAN/TEST-PROJECT | @yield('title')</title>

        <!-- bootstrap / fonts / custom styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    
    
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="http://kamfolio.com/wp-content/uploads/2016/09/site-logo.png" class="logo" alt="Kamran Yakub">
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/classifieds/create">Add Listing</a></li>
                    </ul>
                </div><!-- nav-collapse -->
            </nav>
        </div><!-- top nav-wrapper -->
        
        
        
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @section('sidebar')
                        Sidebar
                    @show
                </div>
                
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div><!-- content layout -->
        
        
        
        
        
        <div class="col-lg-12 footer text-center">
            <div class="share">
                <button class="share-toggle-button">
                    <i class="share-icon fa fa-share-alt"></i>
                </button>
                <ul class="share-items">
                    <li class="share-item">
                        <a href="https://www.facebook.com/yakub.kamran" target="_blank" class="share-button">
                            <i class="share-icon fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="share-item">
                        <a href="https://vk.com/kaskari" target="_blank" class="share-button">
                            <i class="share-icon fa fa-vk"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="12" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                    </filter>
                </defs>
            </svg>
            <br/>
            <p>© 2016 / all rights reserved / Yakubov Kamran A.</p>
            <a href="http://kamfolio.com/" target="_blank">www.kamfolio.com</a>
        </div><!-- footer -->
        
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/js/TweenMax.min.js"></script>
        <script src="/js/share.js"></script>
        <script src="/js/jquery.nicescroll.min.js"></script>
		<script>
			$(document).ready(function() {
				body = document.getElementsByTagName("body")[0];
				$('body').niceScroll({
					cursoropacitymax:0.8,
					cursorwidth:6,
					cursorborderradius: "10px",
					cursorcolor:"#333"
				});
			});
		</script>
    </body>
</html>
