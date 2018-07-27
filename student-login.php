 

<!-- STYLESHEET -->
<link rel="stylesheet" type="text/css" href="style2.css">
<!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- Stylesheet -->
<style>
	@import url('https://fonts.googleapis.com/css?family=Lato');
	/*Page background color*/
	body {
		background-color: #8A8375;
	}
	/*login box*/
	.login-box {
		background-color: #534C3B;
		border-radius: 5px;
		width: 300px;
		height: 350px;
		margin-top: 50px;
	}
	/*login box elements*/
	label, input {
		display: block;
		width: 100%;
		color: #fff;
		font-family: 'Lato', sans-serif;
		font-size: 1.5em;
	}
	input {
		color: #555;
	}
	.login-sign {
		color: #fff;
		font-family: 'Lato', sans-serif;
	}
	.login-button {
		width: 50%;
		margin-top: 15px;
		background-color: transparent;
		border: 1px solid #fff;
		color: #fff;
		font-family: 'Lato', sans-serif;
		padding: 10px;
		font-size: 1.25em;
	}
	.login-button:hover {
		background-color: #373B2A;
	}
	.signup-button {
		width: 50%;
		margin-top: 15px;
		margin-left: 10px;
		background-color: transparent;
		border: 1px solid #fff;
		color: #fff;
		font-family: 'Lato', sans-serif;
		padding-top: 12px;
		padding-bottom: 12px;
		padding-left: 30px;
		padding-right: 30px;
		font-size: 1.25em;
	}
	.signup-button:hover {
		background-color: #373B2A;
		color: #fff;
		text-decoration: none;
	}
	.anchors {
		margin-top: 10px;
		display: block;
		color: #fff;
		font-family: 'Lato', sans-serif;
	}
	.anchors:hover {
		color: #fff;
	}
</style>
<!-- END OF STYLESHEET -->

<div class="container-fluid login-page">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 login-box">
					<h1 class="login-sign text-center">LOGIN</h1>
					<form class="login-form" action="includes/student-login.inc.php" method="POST">
						<label class="login-label">Email</label>
						<input class="login-input" type="email" name="email" placeholder="Emaill">
						<label class="login-label">Password</label>
						<input class="login-input" type="password" name="password" placeholder="Password">
						<button class="login-button" type="submit" name="submit">Login</button>
						<a class="signup-button" href="sign-up.php">Sign up</a>
						<a href="#" class="anchors">Forgot password?</a>
					</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</div>	

<!-- bootstrap JS -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>