 

<?php

include_once 'includes/dbconnection.inc.php';
include_once 'header.php';

if (isset($_POST['submit'])) {
	$examName 			= mysqli_real_escape_string($conn, $_POST['exam_name']);	
	$numberOfQuestions	= mysqli_real_escape_string($conn, $_POST['number_of_questions']);
	$timeLimit 			= mysqli_real_escape_string($conn, $_POST['time_limit']);
	$author 			= mysqli_real_escape_string($conn, $_POST['author']);
	$subject 			= mysqli_real_escape_string($conn, $_POST['subject']);
	$sy 				= mysqli_real_escape_string($conn, $_POST['sy']);


	$_SESSION['examName'] = $examName;

	$sql = "SELECT * FROM exams WHERE name='$examName';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck >= 1) {
		echo 'There is an existing exam with the same name' . '<br>';
		echo '<a href="create-exam1.php">Change exam name</a>' . '<br>';
		echo '<a href="admin-panel.php">Exam list</a>';

	} else {
		$sql = "INSERT INTO exams (author, name, subject, school_year, time_limit, num_questions) VALUES ('$author', '$examName', '$subject', '$sy', '$timeLimit', $numberOfQuestions);";
		mysqli_query($conn, $sql);
		echo '<form action="create-exam2.php" method="POST">';
		echo '<table>
			 	<tr>
			 		<th>Number</th>
			 		<th>Question</th>
			 		<th>Choice A</th>
			 		<th>Choice B</th>
			 		<th>Choice C</th>
			 		<th>Choice D</th>
			 		<th>Answer</th>
			 	</tr>';
		for ($i=1; $i < $numberOfQuestions + 1; $i++) { 
			echo 	'<tr>
						<td>'.$i.'</td>
				 		<td><input type="text" name="question[]"></td>
				 		<td><input type="text" name="choice1[]"></td>
				 		<td><input type="text" name="choice2[]"></td>
				 		<td><input type="text" name="choice3[]"></td>
				 		<td><input type="text" name="choice4[]"></td>
				 		<td><input type="text" name="correct_answer[]"></td>
				 	</tr>';		 	
		}
		echo '</table><button type="submit" name="submit">Submit</button>
				</form>';
	}
} else {
	header("Location: ../QuizApp/create-exam.php?error");
	exit();
}