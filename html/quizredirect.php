<?php 

	include('db_connect_quiz.php');

	//check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
	//write query for all answers
	$sql = 'SELECT * FROM counter';

	//make query & get result
	$result = mysqli_query($conn, $sql);

	//fetch the resulting rows as an array
	$answers = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$answers[0]['increment']++;
	$newcounter = $answers[0]['increment'];

	$update = "UPDATE counter SET increment=$newcounter";
	if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
	}

	//write query for all answers
	$sql = 'SELECT * FROM counter';

	//make query & get result
	$result = mysqli_query($conn, $sql);

	//fetch the resulting rows as an array
	$answers = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if($answers[0]['increment'] >= 9){
		session_start();
		$newcounter = 0;
		$update = "UPDATE counter SET increment=$newcounter";
		$_SESSION['question-answers'] = $_POST['question-answers'];
		$lastans = $_SESSION['question-answers'];
		$currID = $answers[0]['increment'] - 1;
		$update = "UPDATE useranswers SET answer='$lastans' WHERE id=$currID"; 
		if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
		}
		header("Location: grade.php");
		
	} else {
		session_start();
		$_SESSION['value'] = $answers[0]['increment'];
		$_SESSION['ans'] = $_POST['question-answers'];
		header("Location: questions.php");
	}
?>