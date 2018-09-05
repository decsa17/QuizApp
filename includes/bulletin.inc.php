

<?php


if (isset($_POST['submit'])) {
	include_once 'dbconnection.inc.php';

	date_default_timezone_set('Asia/Manila');
	$author		= mysqli_real_escape_string($conn, $_POST['author']);
	$message 	= mysqli_real_escape_string($conn, $_POST['message']);
	$dateToday 	= date("F d,Y h:ia");

	if (empty($author) || empty($message)) {
		
	} else {
		$sql = "INSERT INTO bulletin_board (comment_author, comment_comment, comment_date) 
				VALUES ('$author', '$message', '$dateToday');";
		mysqli_query($conn, $sql);
		header("Location: ../edit-profile.php?POST_ADDED=SUCCESS");
		exit();
	}
}