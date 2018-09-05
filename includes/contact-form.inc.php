

<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$mailTo = "decsaclaire17@gmail.com";
	$headers = "From: " .$mailFrom;
	$txt = "You have received an email from " .$name. ".\n\n" .$message;


	mail($mailTo, $subject, $txt, $headers);	
	
} else {
		header("Location: ../contact-us.php?");
		exit();
	}