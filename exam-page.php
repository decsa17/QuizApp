

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

				$sql = "SELECT * FROM exams WHERE school_year = $sy;";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo 
							"<tr>
								<td>" .$row["subject"]. "</td>
								<td> <a href=".'exams/'.$row["name"].'.php'.">" .$row["name"]. "</a></td>
								<td>" .$row["author"]. "</td>
							</tr>";
					}
				}

			?>
		</table>
	</div>
</div>
<?php 
	include_once 'footer.php';
?>