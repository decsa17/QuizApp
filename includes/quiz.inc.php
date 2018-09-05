

<?php

if (isset($_POST['submit'])) {
	include_once 'dbconnection.inc.php';

	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$quiz_name = mysqli_real_escape_string($conn, $_POST['quiz_name']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);

	if (empty($subject) || empty($quiz_name) || empty($author)) {
		header("Location: ../admin-panel.php?inputempty");
		exit();
	} else {
		if (!preg_match("/^[a-zA-Z\d ]*$/", $quiz_name) || !preg_match("/^[a-zA-Z\d ]*$/", $author)) {
			header("Location: ../admin-panel.php?pregmatch");
			exit();
		} else {
			$sql = "SELECT * FROM exams WHERE name='quiz_name';";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck >= 1) {
				header("Location: ../admin-panel.php?sqlerr");
				exit();
			} else {
				$sql = "INSERT INTO exams (subject, name, author) VALUES ('$subject', '$quiz_name', '$author');";
				mysqli_query($conn, $sql);
				header("Location: ../admin-panel.php?success");
				exit();
			}
		}
	}
} else {
	header("Location: ../admin-panel.php?empty=");
	exit();
}