<?php 
	session_start();
	$prompt = 'WHICH LANGUAGE DO I PRIMARILY PROGRAM IN?';
	$A = 'Python';
	$B = 'C++';
	$C = 'Java';
	$D = 'Scratch';
	if(isset($_SESSION['value']) and $_SESSION['ans'] != null){
		include('db_connect_quiz.php');

		//check connection
		if(!$conn){
			echo 'Connection error: ' . mysqli_connect_error();
		}

		$getans = 'SELECT * FROM useranswers';
		$userans = $_SESSION['ans'];
		$updateid = $_SESSION['value'] - 1;
		$updateans = "UPDATE useranswers SET answer='$userans' WHERE id=$updateid";
		if(!mysqli_query($conn, $updateans)){
				echo 'query error: ' . mysqli_error($conn);
		}
		//write query for all answers
		$sql = 'SELECT * FROM problemdata';

		//make query & get result
		$result = mysqli_query($conn, $sql);

		//fetch the resulting rows as an array
		$answers = mysqli_fetch_all($result, MYSQLI_ASSOC);

		$prompt = $answers[$_SESSION['value'] - 1]['prompt'];
		$A = $answers[$_SESSION['value'] - 1]['A'];
		$B = $answers[$_SESSION['value'] - 1]['B'];
		$C = $answers[$_SESSION['value'] - 1]['C'];
		$D = $answers[$_SESSION['value'] - 1]['D'];
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quiz | Andrew Zheng</title>
		<link rel="stylesheet" type="text/css" href="../css/personalweb.css">
		<script>
			var prevScrollpos = window.pageYOffset;
			window.onscroll = function() {
				var currentScrollPos = window.pageYOffset;
			  if (prevScrollpos > currentScrollPos) {
			    document.getElementById("disappear").style.top = "0";
			  } else {
			    document.getElementById("disappear").style.top = "-100px";
			  }
			  prevScrollpos = currentScrollPos;
			}

  		</script>
	</head>
	<body>
		<!-- Nav Bar -->
			<section class="navcontainer" id="disappear">
				<div class="tablewrapper" >
					<div class="table2">
							<ul class="navbar">
								
							</ul>
					</div>
					<div class="table">
							<ul class="navbar main">
								<li>
									<a href="personalweb.html" class="special">HOME</a>
								</li>
								<li>
									<a href="interests.html" class="special">INTERESTS</a>
								</li>
								<li>
									<a href="quiz.php" class="special">QUIZ</a>
								</li>
								<li>
									<a href="pollgate.php" class="special">POLL</a>
								</li>
							</ul>
					</div>
				</div>
			</section>
		<section class="quiz">
			<div>
				<h2 class="header">QUIZ</h2>
			</div>
			
			<form action="quizredirect.php" method = "post" id="quiz" class="question">
					<h3><?php echo $prompt?></h3>
					
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-answers" id="question-answers-A" value="A" />
	                        <label for="question-answers-A"><?php echo $A?></label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-answers" id="question-answers-B" value="B" />
	                        <label for="question-answers-B"><?php echo $B?></label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-answers" id="question-answers-C" value="C" />
	                        <label for="question-answers-C"><?php echo $C?></label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-answers" id="question-answers-D" value="D" />
	                        <label for="question-answers-D"><?php echo $D?></label>
	                    </div>
                	</div>
					<input type="submit" value="Continue" class="btnsubmit"/>
			</form>
		</section>
	</body>
</html>