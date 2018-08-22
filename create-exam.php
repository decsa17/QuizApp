



<?php
	include_once 'header.php';
?>

	<div class="row">
		<div class="col">
			<form action="create-exam1.php" method="POST">
				<label>Author</label><br>
				<input type="text" name="author" required=""><br>
				<label>Exam name</label><br>
				<input type="text" name="exam_name" required=""><br>
				<label>Number of questions</label><br>
				<input type="number" name="number_of_questions" required=""><br>
				<label>Time limit</label><br>
				<input type="number" name="time_limit"><br>
				<label>Subject</label><br>
				<input type="text" name="subject" required=""><br>
				<label>School year</label><br>
				<input type="number" name="sy" required=""><br>
				<button type="submit" name="submit">submit</button>
			</form>
		</div>
	 </div>



	 

<?php
	include_once 'footer.php';
?>



