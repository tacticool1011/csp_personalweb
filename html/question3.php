<?php 
	session_start();
	$_SESSION['question-2-answers'] = $_POST['question-2-answers'];
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
			
			<form action="question4.php" method = "post" id="quiz" class="question">
					<h3>What is my favorite photography style?</h3>
					<div class="quizQ">
						<div class="specificQ">
	                        <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />
	                        <label for="question-3-answers-A">Portrait </label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />
	                        <label for="question-3-answers-B">Landscapes </label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />
	                        <label for="question-3-answers-C">Sports </label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-3-answers" id="question-1-answers-D" value="D" />
	                        <label for="question-3-answers-D">All of the above</label>
	                    </div>
                	</div>
					<input type="submit" value="Continue" class="btnsubmit"/>
			</form>
		</section>
	</body>
</html>