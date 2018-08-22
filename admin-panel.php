

<?php
include_once 'header.php';
include_once 'includes/dbconnection.inc.php';
?>

<style>
	
	.img-holder {
		width: 100px;
		height: 100px;
		background-color: gray;
		border-radius: 5px;
		margin: 0;
	}
	.img-hr {
		width: 50%;
	}
	.img-ul {
		margin-left: 10px;
		padding-left: 10px;
	}
	.img-ul:hover {
		cursor: pointer;
	}
	.col-7 {
		background-color: #fff6f6;
		border-radius: 5px;
	}
	li {
		margin-left: 10px;
	}
	label, input {
		width: 50%;
	}
	
	


</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-2">
			<div class="img-holder">
				<img src="">
			</div>
			<hr class="img-hr">
			<ul class="img-ul">
				<li onclick="showExam()">Exams</li>
				<li><a href="create-exam.php">Create Exam</a></li>
				<li>Class</li>
			</ul>
		</div>
		<div class="col-10">
			<div class="row">
				
			</div>
			<div id="output"></div>
		</div>
	</div>
</div>

<!-- test -->









<!-- test -->


<script> 
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById('output').innerHTML = xhttp.responseText;
			};
		}

	function showExam(){
		xhttp.open("GET", 'includes/exam-queries.php', true);
		xhttp.send();
	}

	function createExam(){
		xhttp.open("GET", 'includes/create-exam.inc.php', true);
		xhttp.send();
	}
</script>


<?php
include_once 'footer.php';
?>