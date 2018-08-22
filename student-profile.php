

<?php
	include_once 'header.php';
	include_once 'includes/dbconnection.inc.php';
?>


<div class="container-fluid">
	<section>
		<div class="row">
			<div class="col-md-2">
				<?php
					if ($_SESSION['u_profile_picture'] == NULL) {
						echo '<img src="upload/uploaded_images/blankimg.png">';
					} else {
						echo '<img src="upload/'.$_SESSION['u_profile_picture'].'" class="images">';
					}
				?>
			</div>
			<div class="col-md-4">
				<h1 class="profile-name">
					<i>
						<?php 
							echo $_SESSION['u_firstname'] . " ". $_SESSION['u_lastname'] . "<br>";
							echo "@" . $_SESSION['u_username'];
						?>
					</i>
				</h1>	
			</div>
		</div>	
	</section>
	<section>
		<div class="row">
			<div class="col-md-2">
				<ul class="lists">
					<li><a href="edit-profile.php">Profile</a></li>
					<li><a href="exam-page.php">Exams</a></li>
				</ul>
			</div>
			<div class="col-md-5">
				<div class="box">
					<div class="box--notif">
						<h4 class="box-header">Result</h4>
					</div>
				</div>
			</div>
			<div class="col-md-5">
			</div>
		</div>
	</section>
</div>

	
	
<?php
	include_once 'footer.php';
?>