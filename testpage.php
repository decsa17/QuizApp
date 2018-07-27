

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
?>


<?php

	$sql = "SELECT * FROM students WHERE NOT lastname='Ignacio' AND NOT middlename='Cruz';";
	$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['firstname'] . " " . $row['lastname'] ."<br>";
	}
?>

<h1>Hello, World!</h1>
<?php
	include_once 'footer.php';
?>