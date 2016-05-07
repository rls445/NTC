<?php
	if (isset($_POST["submit"])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$comment = $_POST['comment'];

		$from = 'NTC Contact Form'; 
		$to = 'rls445@nyu.edu'; 
		$subject = 'Message from Contact Us Page ';
		 
		$body = "From: $firstname $lastname\n
		 E-Mail: $email\n
		 Phone Number: $phonenumber\n
		 Comment: $comment\n";

		// Check if name has been entered
		if (!$_POST['firstname']) {
			$errFName = 'Please enter your first name';
		}
		
		if (!$_POST['lastname']) {
			$errLName = 'Please enter your last name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		// $phone is valid
		if(!$_POST['phonenumber'] || (preg_match("/^([0-9]{3}) [0-9]{3}-[0-9]{4}$/", $phonenumber)) {
  			$errPhone = 'Please enter a valid phone number ';
  		}
		
		//Check if message has been entered
		if (!$_POST['comment']) {
			$errComment = 'Please enter your a short comment about the nature of your inquiry';
		}

 
// If there are no errors, send the email
if (!$errFName && !$errLName && !$errEmail && !$errPhone && !$errComment) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! A member of the NTC team will be in touch soon.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again or contact info@northerntiercontracting.com</div>';
	}
}
	}

 ?>