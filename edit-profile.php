

<?php
	include_once 'header.php';
?>

	
<?php
	if (isset($_SESSION['u_id'])) {
		echo '<h1 class="myprofilename">'.$_SESSION['u_firstname']. ' ' .$_SESSION['u_lastname'].'</h1>';
		echo '<h2 class="myprofilename">'.$_SESSION['u_age'].'</h2>';
		echo '<h2 class="myprofilename">'.'SY'.$_SESSION['u_schoolyear'].'</h2>';
	}
?>


<div class="container m-auto">
	<form action="upload/uploads.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br>
		<button type="submit" name="submit">UPLOAD</button>
	</form>
</div>
<div class="container m-auot">
	<div class="row">
		<div class="col-md-4">
			<form class="comment pt-5" action="includes/bulletin.inc.php" method="POST">
				<input class="w-75" type="text" name="author" placeholder="Your name">
				<textarea class="w-100" name="message"></textarea>
				<input class="w-75 mt-0" type="submit" name="submit">
			</form>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
	</div>
</div>



<?php
	include_once 'footer.php';
?>