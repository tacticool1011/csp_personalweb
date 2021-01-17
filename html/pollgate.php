<?php
	if(isset($_COOKIE['username'])){
		header('Location: pollresults.php');
	}
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);
		setcookie('username', $username, time() + (2 * 365 * 24 * 60 * 60));
		header('Location: poll.php');
	} 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>POLL | Andrew Zheng</title>
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
			<form method = "post" id="quiz" class="question">
					<h3>READY TO GET STARTED?</h3>
					<div style="margin: 0 auto; margin-bottom: 5%;">
						<input type = "text" name="username" placeholder="Please enter your name" required/>
					</div>
					<input type="submit"  name="submit" class="btnsubmit"/>
			</form>
		</section>
	</body>
</html>