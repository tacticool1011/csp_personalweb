<?php
	session_start();
	$_SESSION['question-8-answers'] = $_POST['question-8-answers'];
	//connect to databse
	$conn = mysqli_connect('us-cdbr-east-03.cleardb.com', 'b1ccdd76923f3f','5ec23673', 'heroku_343c6c1b771a826');

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

	//free result from memory
	mysqli_free_result($result);

	//close connection
	mysqli_close($conn);
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
									<a href="quiz.html" class="special">QUIZ</a>
								</li>
								<li>
									<a href="http://www.usaco.org/index.php?page=staff" target="_blank" class="special">CONTACT</a>
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
					<?php 
					$i = 0;
					$correct = 0;
					foreach($answers as $answer){ 
						if($answer['id'] == '1' and $answer['correctans'] == $_SESSION['question-1-answers']){
							$correct++;
						}
						if($answer['id'] == '2' and $answer['correctans'] == $_SESSION['question-2-answers']){
							$correct++;
						}
						if($answer['id'] == '3' and $answer['correctans'] == $_SESSION['question-3-answers']){
							$correct++;
						}
						if($answer['id'] == '4' and $answer['correctans'] == $_SESSION['question-4-answers']){
							$correct++;
						}
						if($answer['id'] == '5' and $answer['correctans'] == $_SESSION['question-5-answers']){
							$correct++;
						}
						if($answer['id'] == '6' and $answer['correctans'] == $_SESSION['question-6-answers']){
							$correct++;
						}
						if($answer['id'] == '7' and $answer['correctans'] == $_SESSION['question-7-answers']){
							$correct++;
						}
						if($answer['id'] == '8' and $answer['correctans'] == $_SESSION['question-8-answers']){
							$correct++;
						}
						?>
            		<?php }?>
            		<h3>YOUR RESULT:</h3>
            		<h3><?php echo $correct?>/8</h3>
        			
			</form>
		</section>
	</body>
</html>