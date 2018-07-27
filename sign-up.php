

<?php
include_once 'header.php';
?>



<div class="container-fluid body-container">
	<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6 signup-box">
				<h1 class="text-center display-4 welcome-text">Sign up</h1>
				<form action="includes/sign-up.inc.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<label for="firstName" class="label">First name</label>
							<input class="s-up-page w-100" type="text" name="firstName" required>
							<label for="middleName" class="label">Middle name</label>
							<input class="s-up-page w-100" type="text" name="middleName" required>
							<label for="lastName" class="label">Last name</label>
							<input class="s-up-page w-100" type="text" name="lastName" required>
						</div>
						<div class="col-md-6 left-input">
							<label for="lastName" class="label">Email</label>
							<input class="s-up-page w-100" type="email" name="email" required>
							<label for="lastName" class="label">Password</label>
							<input class="s-up-page w-100" type="password" name="password" required>
							<label for="lastName" class="label">Age</label>
							<input class="s-up-page w-100" type="number" name="age" required>
							<label for="lastName" class="label">Schoolyear</label>
							<input class="s-up-page w-100" type="number" name="schoolyear" required>
						</div>
						<button type="submit" name="submit" class="btn btn-lg submit-btn ml-4">Submit</button>
						<p class="m-auto" style="color:red;">**pls fill up all required fields</p>
					</form>
				</div>
			</div>
		<div class="col-md-3"></div>
	</div>
</div>


<?php
include_once 'footer.php';
?>