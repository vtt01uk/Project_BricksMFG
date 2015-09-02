
<?php $this->load->view('partials/header');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bricks MFG Co. | Profile</title>
	<link rel='stylesheet' href='assets/css/bootstrap.css'>
	<link rel='stylesheet' href='assets/css/landing-page-style.css'>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script type='text/javascript' src='assets/js/jquery-2.1.4.js'></script>
	<script type='text/javascript' src='assets/js/bootstrap.js'></script>
	<script>
	</script>
</head>

<body>
	<div class="inner-cover">
		<img src='assets/images/brx-logo.png' class='img-logo' alt='bricks_logo' width='100px' height='100px'>	
	</div>

	<div class="update_profile" style="margin:0px auto; width:500px; border:1px solid black">
		<h2>Profile</h2>
		<form class ='update_form' action="" method='post'>
			<p>First Name: <input type="text" name='first_name'></p>
			<p>Last Name: <input type="text" name='last_name'></p>
			<p>Company: <input type="text" name='company'></p>
			<p>Email: <input type="email" name='email'></p>
			<p>Address: <input type="text" name='address'></p>
			<p>Cell Phone: <input type="text" name='email'></p>
			<p>New Password: <input type="password" name='password'></p>
			<p>Confirm Password: <input type="password" name='Confirm Password'></p>
			<input class='btn btn-default' type="submit" value='Update'>
		</form>
	</div>	

	<div class='container'>	
		<div class='current_orders' style="margin:0px auto; width:700px;">
			<h2>Current Orders</h2>
			<table class='table table-striped'>
	  			<tr>
	  				<th>Item #:</th>
	  				<th>Business:</th>
	  				<th>Order Date:</th>
	  				<th>Order:</th>
	  				<th>Buyer Name:</th>
					<th>Contact #:</th>
					<th>Shipping Address:</th>
					<th>Order Total:</th>
	  			</tr>
	  			<tr>
	  				<td>3</td>
	  				<td>Joe's Bar</td>
	  				<td>09/01/2015</td>
	  				<td>Joe's Design</td>
	  				<td>Joe Barry</td>
	  				<td>415-333-3333</td>
	  				<td>1626 Hummingbird Lane</td>
	  				<td>$1250.15</td>
	  			</tr>		
	  			<tr>
	  				<td>4</td>
	  				<td>Qwerty Co. Ltd</td>
	  				<td>09/01/2015</td>
	  				<td>Joe's Design</td>
	  				<td>Joe Barry</td>
	  				<td>415-333-3333</td>
	  				<td>1626 Hummingbird Lane</td>
	  				<td>$1250.15</td>
	  			</tr>		
			</table>
		</div>

		<div class='past_orders' style="margin:0px auto; width:700px;">
			<h2>Past Orders</h2>
			<table class='table table-striped'>
	  			<tr>
	  				<th>Item #:</th>
	  				<th>Business:</th>
	  				<th>Order Date:</th>
	  				<th>Order:</th>
	  				<th>Buyer Name:</th>
					<th>Contact #:</th>
					<th>Shipping Address</th>
					<th>Order Total:</th>
	  			</tr>
	  			<tr>
	  				<td>1</td>
	  				<td>Joe's Bar</td>
	  				<td>09/01/2015</td>
	  				<td>Joe's Design</td>
	  				<td>Joe Barry</td>
	  				<td>415-333-3333</td>
	  				<td>1626 Hummingbird Lane</td>
	  				<td>$1250.15</td>
	  			</tr>		
	  			<tr>
	  				<td>2</td>
	  				<td>Rodeo School</td>
	  				<td>09/01/2015</td>
	  				<td>Joe's Design</td>
	  				<td>Kobe Bryant</td>
	  				<td>415-333-3333</td>
	  				<td>1626 Hummingbird Lane</td>
	  				<td>$1250.15</td>
	  			</tr>		
			</table>
		</div>
	</div>

<?php $this->load->view('partials/footer');?>
</body>
</html>
