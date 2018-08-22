


<?php

include_once 'includes/dbconnection.inc.php';
include_once 'header.php';

if (isset($_POST['submit'])) {

		$examName = $_SESSION['examName'];

		class SaveExam {
			public $question = "";
			public $choice1 = "";
			public $choice2 = "";
			public $choice3 = "";
			public $choice4 = "";
			public $correct = "";
		}

		$exam = new SaveExam();
		$exam->question = $_POST['question'];
		$exam->choice1  = $_POST['choice1'];
		$exam->choice2  = $_POST['choice2'];
		$exam->choice3 	= $_POST['choice3'];
		$exam->choice4 	= $_POST['choice4'];
		$exam->correct 	= $_POST['correct_answer'];

		$fp = fopen("JSON/".$examName.".txt", 'w');
		fwrite($fp, json_encode($exam));
		fclose($fp);

		$exam_dir = "JSON/".$examName.".txt";
		
		$sql = "SELECT * FROM exams WHERE name='$examName';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck >= 1) {
			$sql = "INSERT INTO exams(exam_dir) VALUES('$exam_dir');";
		}
		header("Location: ../QuizApp/admin-panel.php?Success!");
		exit();
} else {
	header("Location: ../QuizApp/admin-panel.php?ERROR");
	exit();
}