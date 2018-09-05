


<?php
session_start();	
	if (isset($_POST['submit'])) {
		include_once 'dbconnection.inc.php';

		// STUDENT ID FOR SAVING SCORES INTO DB
		$studentId = $_SESSION['u_id'];
		// SAVING TIMESTAMPS
		date_default_timezone_set('Asia/Manila');
		$timeStamp = date("M d,Y-h:ia");
		// SAVING VARIABLES FROM INPUT NAMES

		// DECLARED VARIABLES
			$arr = $_POST['choice']; 
			$c = count($arr);
			$score = 0;
			$myArr = array();

		// DATABASE QUERY
			$sql = "SELECT * FROM physics_q1_y1;";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
				array_push($myArr, $row['answer']);
			}

		// EXAM CHECKER
		// 	 ||
		//	 ||
		//	 ||
		//  \\//
		// 	 \/
		// 	this code checks if the answer from user input matches the 
		//  correct answer from the database thus adding each correct 
		//  answers to the $score variable

			for ($i=0; $i <= 4; $i++) { 
				if ($arr[$i] === $myArr[$i]) {
					$score++;
				}
			}
			echo $score; 

		
		
		//  INSERT EXAM RESULT INTO THE exam_result DB
		$newQuery = "INSERT INTO exam_result(id, score, date_time, exam_status)
					VALUES('$studentId', '$score', '$timeStamp', 'taken');";
		mysqli_query($conn, $newQuery);
		header("Location: ../exam-result-page.php?EXAM-SUCCESS");
		exit();


	} else {
		header("Location: ../exam-page.php?error");
		exit();
	}
