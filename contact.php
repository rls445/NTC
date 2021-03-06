<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">

    	<meta name="description" content="NTC is committed to providing you with the most complete General Contracting service in the North Country. Established in 2012 the managing partners of NTC bring three decades of experience to meet your construction needs.">
    	<meta name="keywords" content="construction, local, northern, New York, NY, NTC, contracting">
    	
		<title>Norther Tier Contracting</title>

		<link rel="stylesheet" href="css/normalize.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
	<header>
		<div class="centersection">
				<nav>
					<div class="logobanner">
						<a class="logo" href="index.html"><img src="images/ntclogo.JPG" alt="NTC Compass Logo"></a>
					</div>
					<ul class="headerbuttons">
		                <li><a href="ourteam.html">Our Team</a></li>
		                <li><a href="projects.html">Projects</a></li>
		                <li><a href="contact.html">Contact</a></li>
	         	   </ul>
				</nav>
		</div>
	</header>

	<!-- Hero -->
    <section class="hero clearfix">
    	<div class="centersection">
        <div class="hero-block contact">
			<form class="form-horizontal" role="form" method="post" action="form/index.php">
				<div class="form-group row">
				<label for="firstname" class="col-sm-2 control-label">First Name</label>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname']); ?>">
						<?php echo "<p class='text-danger'>$errFName</p>";?>
				    </div>
			    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
				    <div class="col-sm-4">
				     	<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname"
				     	value="<?php echo htmlspecialchars($_POST['lastname']); ?>">
						<?php echo "<p class='text-danger'>$errLName</p>";?>
				  	</div>
				</div>
			    <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			    	<div class="col-sm-10">
			      		<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"
			      		value="<?php echo htmlspecialchars($_POST['email']); ?>">
						<?php echo "<p class='text-danger'>$email/p>";?>
			    	</div>
			  	</div>
				<div class="form-group">
			    <label for="phonenumber" class="col-sm-2 control-label">Phone Number</label>
			    	<div class="col-sm-10">
			      		<input type="tel" class="form-control" id="phonenumber" placeholder="(999) 999-9999" name="phonenumber" value="<?php echo htmlspecialchars($_POST['phonenumber']); ?>">
						<?php echo "<p class='text-danger'>$phonenumber</p>";?>
			   		</div>
			  	</div>
				<div class="form-group">
			    <label for="comment" class="col-sm-2 control-label">Comment</label>
			    	<div class="col-sm-10">
			      		<textarea class="form-control" rows="3" id="comment" placeholder="Please add any additional information here." name="comment"><?php echo htmlspecialchars($_POST['comment']);?></textarea>
						<?php echo "<p class='text-danger'>$errComment</p>";?>
			   		</div>
			  	</div>
				<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			     		<button type="submit" class="btn btn-default">Submit</button>
			    	</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
					<?php echo $result; ?>	
					</div>
				</div>
			</form>
			<p class="address">39 South Gordon Street<br>Gouverneur, New York 13642<br><strong>Phone:</strong> 315-287-0208<br><strong>Fax:</strong> 315-287-0797</p>
			<a href="mailto:info@northerntiercontracting.com">info@northerntiercontracting.com</a>
        </div>
    	</div>
    </section>


	<footer class="pagefooter">
		<div class="centersection">
		<p class="copyright"> Content copyright 2012-2016. NORTHERNTIERCONTRACTING.COM. All rights reserved.</p>

		<ul>
			<li><a href="#"><span class="fa fa-linkedin"></span></a></li> 
			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
		</ul>
		</div>	
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>

</html>
