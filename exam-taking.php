

<?php

include_once 'includes/dbconnection.inc.php';
include_once 'header.php';

?>


<div>

<?php
	// file name passed with form using button value see exam-page.php
	$file_dir 	= $_POST['subject']; 

	// retrieving JSON files from directory
	$json_file 	= file_get_contents("JSON/".$file_dir.".txt"); 

	$json 	= json_decode($json_file, true); // decoding 
	
	// decoded json file stored in variable  
	$question 	=  $json['question'];
	$choice1 	= $json['choice1'];
	$choice2 	= $json['choice2'];
	$choice3 	= $json['choice3'];
	$choice4 	= $json['choice4'];

	// correct answers stored in a session variable passed on exam-processing.php
	$_SESSION['answer_arr'] = $json['correct'];


	$l = count($json['question']);
	$q_num = 1; // question number

	// form input name($_POST['choice']) passed on exam-processing.php
	$ct = 0;  
?>
<form action="exam-processing.php" method="POST">
<?php

	for ($i=0; $i < $l; $i++) {
		echo '<h4>'. $q_num++ . ". " .$question[$i].'</h4>
			<input type="radio" name="choice['.$ct.']" value="A" checked>'.$choice1[$i].'<br>
			<input type="radio" name="choice['.$ct.']" value="B">'.$choice2[$i].'<br>
			<input type="radio" name="choice['.$ct.']" value="C">'.$choice3[$i].'<br>
			<input type="radio" name="choice['.$ct.']" value="D">'.$choice4[$i].'<br>';
			$ct++; // important to increment so you wont have problem with the radio buttons
	}
?>
	<button type="submit" name="submit">Submit</button>
</form>
</div>


<?php

include_once 'footer.php';

?>