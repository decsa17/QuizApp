

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
?>

	



<div class="row m-2">
		
<?php
	$imgId = $_SESSION['u_id'];
	$sql = "SELECT * FROM images WHERE id='$imgId';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck == 0) {
		echo 'You don\'t have any pictures';
	} else {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="col-md-2 p-0 m-1">
					<div class="img-container">
						<img src="upload/'.$row['img_dir'].'" class="images">
						<div class="image-text">
							<p>wadap?!</p>
						</div>
					</div>	
				 </div>';
		}
	}
?>

</div>

<div class="row">
	<div class="col-md-4 p-4">
		<form action="upload/uploads.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file"><br>
			<button type="submit" name="submit">UPLOAD</button>
		</form>
	</div>
</div>


<?php
	include_once 'footer.php';
?>