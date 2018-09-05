

<?php

	include_once '../includes/dbconnection.inc.php';
	
				
	echo '<form id="examForm" action="../includes/exam-checker.inc.php" method="POST">';
			$ct = 1;
			$qc = 1;
			$sql = "SELECT * FROM physics_q1_y1;";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)){
			echo  		'<p class="question">' .$qc++. '. ' .$row["question"]. '</p>			
						<span class="choices">A. </span><input type="radio" name="choice['.$ct.']" value="a" checked>'.$row["choices_a"].'<br>
						<span class="choices">B. </span><input type="radio" name="choice['.$ct.']" value="b">'.$row["choices_b"].'<br>
						<span class="choices">C. </span><input type="radio" name="choice['.$ct.']" value="c">'.$row["choices_c"].'<br>
						<span class="choices">D. </span><input type="radio" name="choice['.$ct.']" value="d">'.$row["choices_d"].'<br>';
							$ct++;
						}
		echo	'<button id="myForm" type="submit" name="submit">Send</button>
		</form>';
