

<?php
include_once 'dbconnection.inc.php';


$sql 	= "SELECT * FROM exams;";
$result = mysqli_query($conn, $sql);


	echo 	'<div class="row">
				<div class="col-6">
					<button class="btn btn-primary btn-sm">test</button>
					<button class="btn btn-primary btn-sm">test</button>
					<button class="btn btn-primary btn-sm">test</button>
					<button class="btn btn-primary btn-sm">test</button>
				</div>
			</div>';
while ($row = mysqli_fetch_assoc($result)) {
		
	echo	'<div class="row">
				<div class="col-sm-8">
					<p>' .$row["name"]. '</p>
				</div>
				<div class="col-sm-4">
					<button class="btn btn-primary btn-sm">update</button>
					<button class="btn btn-danger btn-sm">delete</button>
				</div>
			</div>';
 }