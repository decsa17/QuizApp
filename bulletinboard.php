

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
	include_once 'includes/bulletin.inc.php';
?>


<?php
	$sql 	= "SELECT * FROM bulletin_board LIMIT 2;";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p><blockquote class='blockquote'>";
			echo $row['comment_comment'];
			echo "<br>";
			echo "<footer class='blockquote-footer'><cite title='Source Title'>".$row['comment_author']."</cite></footer>";
			echo "<p></blockquote>";
		}
	} else {
		echo "There are no comments";
	}

?>
<?php
	include_once 'footer.php';
?>