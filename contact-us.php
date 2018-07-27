

<?php
	include_once 'header.php';
?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				
			</div>
			<div class="col-4">
				<form method="POST" action="includes/contact-form.inc.php">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Full name">
						<input class="form-control" type="text" name="mail" placeholder="Your E-mail">
						<input class="form-control" type="text" name="subject" placeholder="Subject">
						<textarea class="form-control" name="message" placeholder="message"></textarea>
						<button class="form-control" type="submit" name="submit">SEND EMAIL</button>
					</div>
				</form>
			</div>
			<div class="col-4">
				<h1>hello world!</h1>
			</div>
		</div>
	</div>

<?php
	include_once 'footer.php';
?>
