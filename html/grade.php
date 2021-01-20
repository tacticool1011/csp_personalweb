<?php
	//connect to databse
	include('db_connect_quiz.php');

	//check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

	//write query for all answers
	// $sql = 'SELECT id, correctans FROM problems ORDER BY id';
	$usersql = 'SELECT * FROM useranswers';

	//make query & get result
	$userresult = mysqli_query($conn, $usersql);

	//fetch the resulting rows as an array
	$useranswers = mysqli_fetch_all($userresult, MYSQLI_ASSOC);

	//close connection
	mysqli_close($conn);

	//connect to databse
	include('db_connect_quiz.php');

	//check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

	//write query for all answers
	$sql = 'SELECT * FROM problems';

	//make query & get result
	$result = mysqli_query($conn, $sql);

	//fetch the resulting rows as an array
	$answers = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$correct = 0;
	foreach($answers as $answer){
		if($answer['correctans'] == $useranswers[$answer['id'] - 1]['answer']){
			$correct++;
		}
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
	<style>
		.quiz{
		  padding-top: 75px;
		}

		.question{
		  width: 60%;
		  padding: auto;
		  margin: 0 auto;
		  text-align: center;
		  border-width: 2px;
		  border-style: solid;
		  border-color: #050505;
		  border-radius: 10px;
		  margin-bottom: 50px;
		}

		.btnsubmit{
		  margin-bottom: 50px;
		}

		.question h3{
		  font-family: 'bestFont';
		  font-size: 25px;
		}

		input[type=submit]{
		  background-color: #050505;
		  border-width: 2px;
		  border-style: solid;
		  border-color: #050505;
		  color: #32ce32;
		  padding: 16px 32px;
		  text-decoration: none;
		  margin: 4px 2px;
		  font-family: regularFont;
		  cursor: pointer;
		  transition: color 0.3s ease;
		  transition: background-color 0.3s ease;
		}

		input[type=submit]:hover{
		  background-color: white;
		  border-width: 2px;
		  border-style: solid;
		  border-color: #050505;
		  color:  #050505;
		}

		.quizQ{
		  margin: 0 auto;
		  width: 40%;
		  margin-bottom: 5%;
		  margin-left: 45%;
		}

		.specificQ{
		  text-align: left;
		}

		.specificQ label{
		  font-family: regularFont;
		}
	</style>
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
			<form action="question1.php" method = "post" id="quiz" class="question">
            		<h3>YOUR RESULT:</h3>
            		<h3><?php echo $correct?>/8</h3>
			</form>
		</section>
	</body>
</html>

