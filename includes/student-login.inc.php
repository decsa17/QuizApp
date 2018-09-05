

<?php

session_start();

if (isset($_POST['submit'])) {
	include_once 'dbconnection.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($email) || empty($password)) {
		header("Location: ../student-login.php?EMPTY=INPUT_FIELD");
		exit();
	} else {
		$sql = "SELECT * FROM students WHERE email='$email';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../student-login.php?EMPTY=INCORRECT_USERNAME_OR_PASSWORD");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$deHashedpwd = password_verify($password, $row['password']);
				if ($deHashedpwd == false) {
					header("Location: ../student-login.php?EMPTY=INCORRECT_USERNAME_OR_PASSWORD");
					exit();
				} elseif ($deHashedpwd == true) {
					//CREATE SESSION VARIABLES
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_firstname'] = $row['firstname'];
					$_SESSION['u_lastname'] = $row['lastname'];
					$_SESSION['u_age'] = $row['age'];
					$_SESSION['u_schoolyear'] = $row['schoolyear'];
					$_SESSION['u_profile_picture'] = $row['profile_picture'];
					$_SESSION['u_username'] = $row['username'];

					//REDIRECT TO PROFILE PAGE
					header("Location: ../student-profile.php?login-success");
					exit();
				}
			}
		}
	}
}