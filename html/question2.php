<?php 
	session_start();
	$_SESSION['question-1-answers'] = $_POST['question-1-answers'];
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
			
			<form action="question3.php" method = "post" id="quiz" class="question">
					<h3>WHICH IS MY FAVORITE SWIM STROKE?</h3>
					<div class="quizQ">
						<div class="specificQ">
	                        <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />
	                        <label for="question-2-answers-A">Fresstyle</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />
	                        <label for="question-2-answers-B">Breaststroke</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C" />
	                        <label for="question-2-answers-C">Butterfly</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D" />
	                        <label for="question-2-answers-D">Backstroke</label>
	                    </div>
                	</div>
					<input type="submit" value="Continue" class="btnsubmit"/>
			</form>
		</section>
	</body>
</html>