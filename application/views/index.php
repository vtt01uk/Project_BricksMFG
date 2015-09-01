<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="UTF-8">
	<link rel='stylesheet' href='assets/css/bootstrap.css'>
	<link rel='stylesheet' href='assets/css/landing-page-style.css'>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script type='text/javascript' src='assets/js/jquery-2.1.4.js'></script>
	<script type='text/javascript' src='assets/js/bootstrap.js'></script>
	
	<script>


	</script>
	<title>Bricks MFG Co.</title>
</head>
<body>
	
	

	<div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Bricks MFG Co.</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Contact</a></li>
                  <li><a href="#">About Us</a></li>
  	            </ul>
              </nav>
            </div>
          </div>
          <div class="inner-cover">
            <img src='assets/images/brx-logo.png' class='img-logo' alt='bricks_logo' width='400px' height='400px'>	
            <p class="lead"></p>
            <p class="lead">
              <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Login</button>
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  					<div class="modal-dialog modal-sm">
    					<div class="modal-content">
						    <button class="close" data-dismiss="modal">×</button>
      						<form class='login_modal' action='' method='post'>
      							
      							<h4> Login </h4>
      							
      							<p>Email:<input type='email' name='login'></p>
      							<p>Password:<input type='password' name='login'></p>
      							<p><input class='btn btn-default' type='submit' value='Login'></p>
      							<p class='password-forget'><a href=''>Forgot Password?</a></p>
      						</form>
    					</div>
  					</div>
				</div>
             	  
				<!-- Button trigger modal -->
			<button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#myModal">
  				Register
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Register</h4>
			      </div>
			      <div class="modal-body">
			      	<form class ='reg_form' action="" method='post'>
						<p>First Name: <input type="text" name='first_name'></p>
						<p>Last Name: <input type="text" name='last_name'></p>
						<p>Company: <input type="text" name='company'></p>
						<p>Email: <input type="email" name='email'></p>
						<p>Address: <input type="text" name='address'></p>
						<p>Cell Phone: <input type="text" name='email'></p>
						<p>Password <input type="password" name='password'></p>
						<p>Confirm Password <input type="password" name='Confirm Password'></p>
						<input class='btn btn-default' type="submit" value='Register'>
					</form>
			      </div>
			      
			    </div>
			  </div>
			</div>
           	</p>
         </div>

          <div class="mastfoot">
            <div class="inner">
	            <span class="facebook">
	   				<i class="fa fa-facebook-official fa-3x"></i>
				</span>
	            <span class="instagram">
	   				<i class="fa fa-instagram fa-3x"></i>
				</span>
            	<span class="twitter">
	   				<i class="fa fa-twitter fa-3x"></i>
				</span>
				<span class='tumblr'>
					<i class="fa fa-tumblr fa-3x"></i>
    			</span>	

            </div>
          </div>
        </div>
      </div>
    </div>
	
</body>
</html>