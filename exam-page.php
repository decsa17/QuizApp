

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
?>


<div class="row">
	<div class="col-md-4">			
	</div>
	<div class="col-md-4">
		<table>
			<tr>
				<th>Subject</th>
				<th>Exam name</th>
				<th>Author</th>
			</tr>
			<?php

				$sy = $_SESSION['u_schoolyear'];
				$user = $_SESSION['u_id'];
				$sql = "SELECT * FROM exams WHERE school_year=$sy;";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo 	'<tr>
									<form action="exam-taking.php" method="POST">
									<td>'.$row['subject'].'</td>
									<td>'.$row['name'].'</td>
									<td>'.$row['author'].'</td>
									<td><button class="btn btn-sm btn-primary" name="subject" value="'.$row['name'].'">Take</button></td>
									</form>
								<tr>';
					}
				}
			?>	
			
		</table>
	</div>
</div>
<?php 
	include_once 'footer.php';
?>