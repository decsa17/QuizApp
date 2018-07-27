

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
	include_once 'includes/profile-image.inc.php';
?>




<div class="container-fluid">
	<div class="container">
		<div class="row">
			
		
		<div class="col-md-4">
			<div class="onez">
						<?php
							echo $imgVar;
						?>
						<?php
							if (isset($_SESSION['u_id'])) {
								echo '<h1 class="myprofilename">'.$_SESSION['u_firstname']. ' ' .$_SESSION['u_lastname'].'</h1>';
								echo '<h2 class="myprofilename">'.$_SESSION['u_age'].'</h2>';
								echo '<h2 class="myprofilename">'.'SY'.$_SESSION['u_schoolyear'].'</h2>';
							}
						?>
						<h4><a class="myprofilename links" href="edit-profile.php">edit profile</a></h4>
						<h4><a class="myprofilename links" href="contact-us.php">contact us</a></h4>
						<h4><a class="myprofilename links" href="exam-page.php">Exams</a>	</h4>
						<h4><a class="myprofilename links" href="bulletinboard.php">Bulletin board</a></h4>		
			</div>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4"></div>
	</div>
	</div>
</div>



<?php
	include_once 'footer.php';
?>