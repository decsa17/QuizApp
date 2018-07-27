

<?php
	session_start();
	if (!isset($_SESSION['u_id'])) {
		header("Location: student-login.php");
		exit();
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>QuizApp 1.0</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap v4.0 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid master-container">
<div class="container-fluid header-background">
	<div class="nav">

		<?php
			if (isset($_SESSION['u_id'])) {
			echo '<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit">Logout</button>
				</form>';
			} else {
				echo '<a id="loginbtn" href="student-login.php">Login</a>
					<a id="signupbtn" href="sign-up.php">Sign up</a>';
			}
		?>
		
	</div>
</div>














