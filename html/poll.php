<!DOCTYPE html>
<html>
	<head>
		<title>Poll | Andrew Zheng</title>
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
				<h2 class="header">POLL - CRUCIAL TOPICS</h2>
			</div>
			<form action="pollredirect.php" method = "post" id="quiz" class="question">
					<h3>WHICH POCKET DO YOU PUT YOUR PHONE IN?</h3>
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-1-answers" value="A" />
	                        <label for="question-1-answers-A">Left</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-1-answers" value="B" />
	                        <label for="question-1-answers-B">Right</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-1-answers" value="C" />
	                        <label for="question-1-answers-C">Back</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-1-answers" value="D" />
	                        <label for="question-1-answers-D">Don't have pockets</label>
	                    </div>
                	</div>

                	<h3>BRUSH TEETH BEFORE OR AFTER BREAKFAST?</h3>
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-2-answers" value="A" />
	                        <label for="question-2-answers-A">Before</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-2-answers" value="B" />
	                        <label for="question-2-answers-B">After</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-2-answers" value="C" />
	                        <label for="question-2-answers-C">Don't brush</label>
	                    </div>

	                    <div class="specificQ">
	                        <input type="radio" name="question-2-answers" value="D" />
	                        <label for="question-2-answers-C">What's breakfast?</label>
	                    </div>
                	</div>

                	<h3>WHICH THUMB DO YOU USE TO HIT THE SPACEBAR?</h3>
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-3-answers" value="A" />
	                        <label for="question-3-answers-A">Right</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-3-answers" value="B" />
	                        <label for="question-3-answers-B">Left</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-3-answers" value="C" />
	                        <label for="question-3-answers-C">Both</label>
	                    </div>
	                    <div class="specificQ">
	                        <input type="radio" name="question-3-answers" value="D" />
	                        <label for="question-3-answers-C">Alternate</label>
	                    </div>
                	</div>

                	<h3>HOW HARD DO YOU HIT YOUR ENTER KEY?</h3>
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-4-answers" value="A" />
	                        <label for="question-4-answers-A">Soft</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-4-answers" value="B" />
	                        <label for="question-4-answers-B">Medium</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-4-answers" value="C" />
	                        <label for="question-4-answers-C">Hard</label>
	                    </div>
	                    <div class="specificQ">
	                        <input type="radio" name="question-4-answers" value="D" />
	                        <label for="question-4-answers-C">SUPER HARD</label>
	                    </div>
                	</div>

                	<h3>WHEN DO YOU SHOWER?</h3>
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-5-answers" value="A" />
	                        <label for="question-5-answers-A">Morning</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-5-answers" value="B" />
	                        <label for="question-5-answers-B">Noon</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-5-answers" value="C" />
	                        <label for="question-5-answers-C">Afternoon</label>
	                    </div>
	                    <div class="specificQ">
	                        <input type="radio" name="question-5-answers" value="D" />
	                        <label for="question-5-answers-C">Evening</label>
	                    </div>
                	</div>

                	<h3>DO YOU PAY ATTENTION DURING MR. MILLARD'S LECTURES?</h3>
					<div class="quizQ"> 
                        <div class="specificQ">
	                        <input type="radio" name="question-6-answers" value="A" />
	                        <label for="question-6-answers-A">Yes I do!</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-6-answers" value="B" />
	                        <label for="question-6-answers-B">No way!</label>
	                    </div>
	                    
	                    <div class="specificQ">
	                        <input type="radio" name="question-6-answers" value="C" />
	                        <label for="question-6-answers-C">Sometimes</label>
	                    </div>
	                    <div class="specificQ">
	                        <input type="radio" name="question-6-answers" value="D" />
	                        <label for="question-6-answers-C">His lectures are the best!</label>
	                    </div>
                	</div>
					<input type="submit" value="Submit" class="btnsubmit"/>
			</form>
		</section>
	</body>
</html>