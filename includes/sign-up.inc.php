

<?php

if (isset($_POST['submit'])) {
	include_once 'dbconnection.inc.php';

	$firstname 	= 	mysqli_real_escape_string($conn, $_POST['firstName']);	
	$middlename = 	mysqli_real_escape_string($conn, $_POST['middleName']);	
	$lastname 	= 	mysqli_real_escape_string($conn, $_POST['lastName']);
	$email 		= 	mysqli_real_escape_string($conn, $_POST['email']);
	$password 	= 	mysqli_real_escape_string($conn, $_POST['password']);
	$age 		= 	mysqli_real_escape_string($conn, $_POST['age']);	
	$schoolyear = 	mysqli_real_escape_string($conn, $_POST['schoolyear']);
	// Check if input fields are empty
	if (empty($firstname)
	 || empty($middlename)
	 || empty($lastname)
	 || empty($password)
	 || empty($age)
	 || empty($schoolyear)) {
		header("Location: ../sign-up.php?empty=INPUT");
		exit();
	// Check for non alphabetical character
	} else {
		if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $firstname)) {
			header("Location: ../sign-up.php?empty=INVALID_CHARACTER");
			exit();
		} else {
			// Check if email is already taken by different user
			$sql = "SELECT * FROM students WHERE email='$email';";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck >= 1) {
				header("Location: ../sign-up.php?empty=EMAIL_TAKEN");
				exit();
			} else {
				// Block school year that is 4 years ago 
				if ($schoolyear < date("Y") - 4) {
					header("Location: ../sign-up.php?empty=");
					exit();
				} else {
					// Hashing password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					
					$sql = "INSERT INTO students (firstname, middlename, lastname, email, password, age, schoolyear)
					 		VALUES ('$firstname', '$middlename', '$lastname', '$email', '$hashedPwd', '$age', '$schoolyear');";
					mysqli_query($conn, $sql);
					header("Location: ../student-login.php?sign-up=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../sign-up.php?ERROR");
	exit();
}