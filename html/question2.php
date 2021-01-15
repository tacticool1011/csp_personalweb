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
			
			<form action="grade.php" method = "post" id="quiz" class="question">
					<h3>WHICH IS MY FAVORITE SWIM STROKE?</h3>
					<div>
						<label class="container" for="question2-answers-A" >Freestyle
						  <input type="radio" name="question2-answers" value="A">
						  <span class="checkmark"></span>
						</label>

						<label class="container" for="question2-answers-B">Breaststroke
						  <input type="radio" name="question2-answers" value="B">
						  <span class="checkmark"></span>
						</label>

						<label class="container" for="question2-answers-C">Backstroke
						  <input type="radio" name="question2-answers" value="C" id="question-2-answers-C">
						  <span class="checkmark"></span>
						</label>

						<label class="container" for="question2-answers-D">Butterfly
						  <input type="radio" name="question2-answers" value="D" id="question-2-answers-D">
						  <span class="checkmark"></span>
						</label>
                	</div>
                	<input name="correct1" value="<?php
            
            $answer1 = $_POST['question-1-answers'];
        
            $totalCorrect = $_POST['correct'];
            $correct = (int)$totalCorrect;
            
            if ($answer1 == "C") { $correct++; }
            echo "$correct";
        	?>">
					<input type="submit" value="Continue" class="btnsubmit"/>
			</form>
		</section>
	</body>
</html>