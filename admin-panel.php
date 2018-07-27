

<?php
include_once 'header.php';
?>



<div class="container text-center">
	<h1>Hello Professor!</h1>
	<div class="quiz-info">
		<form action="includes/quiz.inc.php" method="POST" class="myBackground">
			<select name="subject">
				<option>Choose Subject</option>
				<option>Science</option>
				<option>Math</option>
				<option>History</option>
				<option>Physical Education</option>
				<option>other</option>
			</select>
			<input type="text" name="quiz_name" placeholder="Enter Quiz name">
			<input type="text" name="author" placeholder="Enter Author's name">
			<button type="submit" name="submit">Send</button>
		</form>
	</div>
</div>





<?php
include_once 'footer.php';
?>