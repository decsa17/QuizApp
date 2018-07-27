

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
?>
<?php
	$studentId = $_SESSION['u_id'];
	$studentFirstName = $_SESSION['u_firstname'];
	$studentLastName = $_SESSION['u_lastname'];

	$sql = "SELECT * FROM exam_result WHERE id='$studentId';";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<p class="question">'. $studentFirstName .' '. $studentLastName .'<br>'
			. $row['exam_status'].' on '. $row['date_time'].'<br>' .' score '. $row['score']
			.' out of '.'5'.'</p>';
	}
?>


<?php
	include_once 'footer.php';
?>