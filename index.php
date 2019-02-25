<html>
<header>
	<?php include "config.php" ?>
</header>
<body>
<?php 
	$i = 1;
	$sql = "SELECT q_id, question, correct_answer from tbl_questions";
	$resultQuestion = $conn->query($sql);
	while($rowQuestion = $resultQuestion->fetch_assoc()){
		$question = $rowQuestion["question"];
		$qid = $rowQuestion["q_id"];
		$correctAnswer = $rowQuestion["correct_answer"];
		echo "<br>";
		echo $i."."." ".$question;
		echo "<br>";
		$i = $i + 1;
		$sql = "SELECT a_id, q_id, answer from tbl_answers WHERE q_id = '$qid'";
		$resultAnswer = $conn->query($sql);
		while($rowAnswer = $resultAnswer->fetch_assoc()){
			$answer = $rowAnswer["answer"];
			echo '<input type = radio>'; echo $answer;
			echo "<br>";
		}
	}
?>
</body>
</html>