

<?php 
	include_once '../header.php';
	include_once '../includes/dbconnection.inc.php';
?>


<link rel="stylesheet" type="text/css" href="../style.css">


<div class="row" id="instruct-box">
	<div class="col-md-10">
		<h1 class="x-para1">Hello<span class="x-mySpan"><?php echo $_SESSION['u_firstname'] . '!'; ?></span></h1>
		<hr class="x-myHr">
		<ul class="x-exam-rules-list">
			<li>you have 4 minutes to finish the exam</li>
			<li>once you answered all exam click the send button</li>
			<li>when the time is up the exam will automatically end</li>
		</ul>
		<button class="x-myBtn" id="myId">Start Exam</button>
	</div>
</div>
<p id="timeShow"></p>
<div id="output">
	
	
</div>

<script>



	var startExam = document.getElementById('myId'); 
	var output = document.getElementById('output');	
	// Start exam ajax calls ajax-exam-questionnaire.php
	startExam.addEventListener("click", startX);


	// timer function below set to 4mins by line 39
	var examTime = new Date(Date.now() + 240000); // 4 min time setter
	function startTime() {

		//exam timer
			var examTimer = setInterval(function(){

			var now = new Date().getTime();
			var countDownTime = examTime - now;

			var minutes = Math.floor((countDownTime % (1000 * 60 * 60)) / (1000 * 60));
	  		var seconds = Math.floor((countDownTime % (1000 * 60)) / 1000);
	  		if (seconds < 10) {
	  			seconds = '0'+seconds;
	  		}
	  		document.getElementById('timeShow').innerHTML = minutes+':'+seconds;
	  		if (countDownTime <= 0) {
	  			document.getElementById("myForm").click();
	  			clearInterval(examTimer);
	  			document.getElementById('timeShow').innerHTML = "Time\'s up!";
	  		}
		}, 1000);	
	}


	//ajax call to page ajax-exam-questionnaire.php 
	function ajax() {
		var xml = new XMLHttpRequest();
		xml.onreadystatechange = function() {
			if (xml.readyState == 4 && xml.status == 200) {
				output.innerHTML = xml.responseText;
			}
		};
		xml.open("GET", "ajax-exam-questionnaire.php", true);
		xml.send()
	}

	//start exam function
	function startX(){
		
		
		startTime()
		document.getElementById('instruct-box').style.display = "none";
		ajax();


	}

</script>
<?php
	include_once '../footer.php';
?>


						