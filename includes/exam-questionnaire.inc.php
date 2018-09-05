

<?php


if (isset($_POST['submit'])) {
	include_once 'dbconnection.inc.php';

	$Question = mysqli_real_escape_string($conn, $_POST['Question']);
	$ChoiceA = mysqli_real_escape_string($conn, $_POST['ChoiceA']);
	$ChoiceB = mysqli_real_escape_string($conn, $_POST['ChoiceB']);
	$ChoiceC = mysqli_real_escape_string($conn, $_POST['ChoiceC']);
	$ChoiceD = mysqli_real_escape_string($conn, $_POST['ChoiceD']);
	$Answer  = mysqli_real_escape_string($conn, $_POST['Answer']);

	
	$sql = "INSERT INTO physics (Question, ChoiceA, ChoiceB, ChoiceC, ChoiceD, Answer)
		    VALUES ('$Question', '$ChoiceA', '$ChoiceB', '$ChoiceC', '$ChoiceD', '$Answer');";

	mysqli_query($conn, $sql);
	header("Location: ../admin-panel.php?success");
	exit();
} else {
	header("Location: ../exam-questionnaire.php?error");
	exit();
}