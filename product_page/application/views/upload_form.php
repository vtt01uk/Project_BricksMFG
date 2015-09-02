<html>
<head>

	<title>Upload Form</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Shop Homepage - Start Bootstrap Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/shop-homepage.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </head>

    <body>

    	<!-- Navigation -->
    	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    		<div class="container">
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    					<span class="sr-only">Toggle navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand" href="#">Start Bootstrap</a>
    			</div>
    			<!-- Collect the nav links, forms, and other content for toggling -->
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    				<ul class="nav navbar-nav">
    					<li>
    						<a href="#">About</a>
    					</li>
    					<li>
    						<a href="#">Services</a>
    					</li>
    					<li>
    						<a href="#">Contact</a>
    					</li>
    				</ul>
    			</div>
    			<!-- /.navbar-collapse -->
    		</div>
    		<!-- /.container -->
    	</nav><br>
    	<style>
    	.welcome
    	{
    		padding: 20px;
    	}
    	</style>
    	<div class="welcome">
    		<h1>Welcome [name]!</h1><br>

    		<p1> Please browse your computer to upload an image.<p1><br>
    			<?php echo $error;?>

    			<?php echo form_open_multipart('/upload/do_upload');?>
    			<form>
    				<input type="file" name="userfile" size="20" /><br>
    				<input type="submit" value="upload" />
    			</form>
    		</div>

 			<!-- product page -->
 			
    		<div class="row">

    			<div class="col-sm-4 col-lg-4 col-md-4">
    				<div class="thumbnail">
    					<img src="http://placehold.it/320x150" alt="">
    					<div class="caption">
    						<h4 class="pull-right">$14.99</h4>
    						<h4><a href="#">First Product</a>
    						</h4>
    						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    							<button type="button" class="btn btn-danger">Add to Cart</button>
    						</div>
    					</div>

    					<div class="col-sm-4 col-lg-4 col-md-4">
    						<div class="thumbnail">
    							<img src="http://placehold.it/320x150" alt="">
    							<div class="caption">
    								<h4 class="pull-right">$24.99</h4>
    								<h4><a href="#">Second Product</a>
    								</h4>
    								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    								<button type="button" class="btn btn-danger">Add to Cart</button>
    							</div>
    						</div>
    					</div>

    					<div class="col-sm-4 col-lg-4 col-md-4">
    						<div class="thumbnail">
    							<img src="http://placehold.it/320x150" alt="">
    							<div class="caption">
    								<h4 class="pull-right">$14.99</h4>
    								<h4><a href="#">Third Product</a>
    								</h4>
    								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    								<button type="button" class="btn btn-danger">Add to Cart</button>
    							</div>
    						</div>
    					</div>

    					<div class="col-sm-4 col-lg-4 col-md-4">
    						<div class="thumbnail">
    							<img src="http://placehold.it/320x150" alt="">
    							<div class="caption">
    								<h4 class="pull-right">$24.99</h4>
    								<h4><a href="#">Fourth Product</a>
    								</h4>
    								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    								<button type="button" class="btn btn-danger">Add to Cart</button>
    							</div>
    						</div>
    					</div>

    					<div class="col-sm-4 col-lg-4 col-md-4">
    						<div class="thumbnail">
    							<img src="http://placehold.it/320x150" alt="">
    							<div class="caption">
    								<h4 class="pull-right">$14.99</h4>
    								<h4><a href="#">Fifth Product</a>
    								</h4>
    								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    								<button type="button" class="btn btn-danger">Add to Cart</button>
    							</div>
    						</div>
    					</div>

    					<div class="col-sm-4 col-lg-4 col-md-4">
    						<div class="thumbnail">
    							<img src="http://placehold.it/320x150" alt="">
    							<div class="caption">
    								<h4 class="pull-right">$24.99</h4>
    								<h4><a href="#">Sixth Product</a>
    								</h4>
    								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    								<button type="button" class="btn btn-danger">Add to Cart</button>
    							</div>
    						</div>
    					</div>

    						<!-- Footer -->
    						<footer>
    							<div class="row">
    								<div class="col-lg-12">
    									<p>Copyright &copy; Coding Dojo July 20th Cohort</p>
    								</div>
    							</div>
    						</footer>

    					</div>
    				</body>
    				</html>