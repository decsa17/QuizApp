

<?php
	include_once 'includes/dbconnection.inc.php';
	include_once 'header.php';
?>

<?php
	if (isset($_POST['submit'])) {


		$arr = $_POST['choice']; // answer chosen by user from exam-taking.php
		
		// 	||		correct answers passed from exam-taking.php
		// 	\/		this is not submitted through form rather passed by $_SESSION
		$correct = $_SESSION['answer_arr'];


		$l = count($_POST['choice']); // required in forloop count of answers
		
		$score = 0;
		for ($i=0; $i < $l; $i++) { 
			if ($arr[$i] === $correct[$i]) { // user answers vs correct  
				$score++;
			}
		}

		$rawPercent = ($score / $l) * 100 . "%"; // algorithm for percentage
		$percentage = round($rawPercent, 2);

		//Local date and time
		date_default_timezone_set('Asia/Manila');
		$timeStamp = date("M d,Y-h:ia");


		$user_name = $_SESSION['u_id']; // user id to be stored in DB 


		$sql = "INSERT INTO exam_result(user_id, date_time, score, percentage)
				VALUES('$user_name', '$timeStamp', '$score', '$percentage');";
		mysqli_query($conn, $sql);

		// CONGRATULATIONS!!!
		if ($percentage >= 75) {

			echo    '<div class="box after-exam">
						<div class="box--notif"
							<h4 class="box-header">Result</h4>
							<p>Congratulations you passed the exam</p>
							<p>Your score: <span class="text-right">'.$score.'</span></p>
							<p>Percentage: <span class="text-right">'.$percentage.'</span></p>
						</div>
					</div>';
		} else {
			echo	'<div class="box after-exam">
						<div class="box--notif">
							<h4 class="box-header">Result</h4>
							<p>Sorry you were below the passing score try again</p>
							<p>Your score: <span class="text-right">'.$score.'</span></p>
							<p>Percentage: <span class="text-right">'.$percentage.'</span></p>
						</div>
					</div>';
		}
		

	} else {
		header("Location: ../QuizApp/exam-page.php?error");
		exit();
	}
		
?>



<?php
	include_once 'footer.php';
?>