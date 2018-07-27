

<?php
include_once 'header.php';
?>

	<div class="container text-center">
		<select id="myVal" onchange="createInput()">
			<option></option>
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="15">15</option>
			<option value="20">20</option>
		</select>
		<form id="demo" action="includes/exam-questionnaire.inc.php" method="POST">
			<button type="submit" name="submit">SUBMIT</button>
		</form>
	</div>


<script src="main.js"></script>
<?php
include_once 'footer.php';
?>