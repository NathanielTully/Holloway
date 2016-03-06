<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>iEmploy</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style/iemploycustom.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
  </head>
  
  
  
  
  
  
  
  
  <body>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="media/images/iemploybrand-small.png"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<form action="./" method="post">
					<li><label for="username">Username: <input type="text" name="username" id="username"/></label></li>
					<li><label for="password">Password: <input type="password" name="password" id="password"/></label></li>
					<li><input type="hidden" name="action" value="login"/>
					<input type="submit" value="Log in"/>
					</li>
					</form>
				  </ul>
				</li>
				<li><a href="register/">Sign Up</a></li>
			</ul>
        </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	<!--begin bg-carousel-->
	<div id="bg-fade-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<div class="slide1"></div>
			</div>
			<div class="item">
				<div class="slide2"></div>
			</div>
			<div class="item">
				<div class="slide3"></div>
			</div>
		</div>
		<!-- .carousel-inner --> 
		<div class="container carousel-overlay text-right">
			<h1 class="slide-text">iEmploy</h1>
			<p class="lead slide-text"></p>
			<a class="btn btn-lg btn-success fp-buttons" href="register/">Sign Up</a>
		</div>
	</div>
	<!--end bg-carousel-->
	
	
	
	
	
	
	
	<div class="container-fluid download-banner text-center"><h3>Download the App <img src="media/images/AppStoreBadge.svg"/></h3></div>
	
	
	
	<!--begin video section-->
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-12 howitworks">
					<h1>How It Works</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, nunc sed feugiat aliquet,
					metus mi porttitor lectus, sit amet iaculis purus lectus a urna. Curabitur metus dolor, sagittis aliquam ligula
					vitae, gravida cursus lectus. Sed eu diam id dolor auctor pretium quis dapibus tellus.</p>
				</div>
				<div class="col-md-6 col-sm-12 video">
					<div class="embed-responsive embed-responsive-16by9">
						<embed src="media/video/iemploy.mov" width="600" height="400" scale="aspect" controller="true">
					</div>
				</div>
			</div>
	</div>	
			
			
			
			
	<!--begin columns-->
    <div class="container-fluid index-container">
        <div class="index-columns">
			<div class="row">
				<div class="col-md-2"><!--Gutter--></div>
				<div class="col-md-2">
					<img class="img-responsive col_img" src="media/images/screenshot1.png"/>
				</div>
				<div class="col-md-1"><!--Gutter--></div>
				<div class="col-md-2">
					<img class="img-responsive col_img" src="media/images/screenshot1.png"/>
				</div>
				<div class="col-md-1"><!--Gutter--></div>
				<div class="col-md-2">
					<img class="img-responsive col_img" src="media/images/screenshot1.png"/>
				</div>
				<div class="col-md-2"><!--Gutter--></div>
			</div>
        </div>
		
		
		
        <div class="index-columns">
			<div class="row">
				<div class="col-md-2"><!--Gutter--></div>
				<div class="col-md-2">
					<img class="img-responsive col_img" src="media/images/screenshot1.png"/>
				</div>
				<div class="col-md-1"><!--Gutter--></div>
				<div class="col-md-2">
					<img class="img-responsive col_img" src="media/images/screenshot1.png"/>
				</div>
				<div class="col-md-1"><!--Gutter--></div>
				<div class="col-md-2">
					<img class="img-responsive col_img" src="media/images/screenshot1.png"/>
				</div>
				<div class="col-md-2"><!--Gutter--></div>
			</div>
        </div>
    </div>
	<!--end columns-->
	
	

	<!--begin footer-->
	<div class="container-fluid footer">
	  <div class="row">
		<div class="col-md-1"><!--Gutter--></div>
		<div class="col-md-3">Column 1</div>
		<div class="col-md-3">Column 2</div>
		<div class="col-md-4">Column 3</div>
		<div class="col-md-1"><!--Gutter--></div>
	  </div>
	</div>
	<!--end footer-->
	
	
	
	
	
	
	
	
	
	<!--JavaScript Files-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>