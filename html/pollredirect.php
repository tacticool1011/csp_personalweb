<?php
	session_start();
	$_SESSION['question-1-answers'] = $_POST['question-1-answers'];
	$_SESSION['question-2-answers'] = $_POST['question-2-answers'];
	$_SESSION['question-3-answers'] = $_POST['question-3-answers'];
	$_SESSION['question-4-answers'] = $_POST['question-4-answers'];
	$_SESSION['question-5-answers'] = $_POST['question-5-answers'];
	$_SESSION['question-6-answers'] = $_POST['question-6-answers'];

	include('db_connect_poll.php');

	//check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
	//write query for all answers
	$sql = 'SELECT * FROM pollresults ORDER BY id';

	//make query & get result
	$result = mysqli_query($conn, $sql);

	//fetch the resulting rows as an array
	$answers = mysqli_fetch_all($result, MYSQLI_ASSOC);
	

	foreach($answers as $answer){ 
		if($answer['id'] == '1'){
			$answers[0][$_SESSION['question-1-answers']]++;
			$index = $_SESSION['question-1-answers'];
			$value = $answers[0][$_SESSION['question-1-answers']];
			$update = "UPDATE pollresults SET $index=$value WHERE id=1";
			if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
			}
		}
		if($answer['id'] == '2'){
			$answers[1][$_SESSION['question-2-answers']]++;
			$index = $_SESSION['question-2-answers'];
			$value = $answers[1][$_SESSION['question-2-answers']];
			$update = "UPDATE pollresults SET $index=$value WHERE id=2";
			if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
			}
		}
		if($answer['id'] == '3'){
			$answers[2][$_SESSION['question-3-answers']]++;
			$index = $_SESSION['question-3-answers'];
			$value = $answers[2][$_SESSION['question-3-answers']];
			$update = "UPDATE pollresults SET $index=$value WHERE id=3";
			if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
			}
		}
		if($answer['id'] == '4'){
			$answers[3][$_SESSION['question-4-answers']]++;
			$index = $_SESSION['question-4-answers'];
			$value = $answers[3][$_SESSION['question-4-answers']];
			$update = "UPDATE pollresults SET $index=$value WHERE id=4";
			if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
			}
		}
		if($answer['id'] == '5'){
			$answers[4][$_SESSION['question-5-answers']]++;
			$index = $_SESSION['question-5-answers'];
			$value = $answers[4][$_SESSION['question-5-answers']];
			$update = "UPDATE pollresults SET $index=$value WHERE id=5";
			if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
			}
		}
		if($answer['id'] == '6'){
			$answers[5][$_SESSION['question-6-answers']]++;
			$index = $_SESSION['question-6-answers'];
			$value = $answers[5][$_SESSION['question-6-answers']];
			$update = "UPDATE pollresults SET $index=$value WHERE id=6";
			if(!mysqli_query($conn, $update)){
				echo 'query error: ' . mysqli_error($conn);
			}
		}
	}
	header("Location: pollresults.php");
	die();
?>