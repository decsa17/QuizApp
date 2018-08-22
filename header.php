

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

	<!-- Page title -->
	<title>QuizApp 1.0</title>

	<!-- CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Meta Datas -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Meta description -->
	<meta name="description" content="Free examination system, It's designed to make examination processing easier and faster, 100% free source ">

	<!-- Bootstrap v4.0 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<nav class="d-flex flex-row justify-content-end p-2">
		<?php
			if (isset($_SESSION['u_id'])) {
			echo '<a href="student-profile.php" class="button button--state--primary home-button">HOME</a>';
			echo '<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit" class="button logout-button">Logout</button>
					</form>';
			}
		?>
	</nav>







