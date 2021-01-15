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
			alskjdf
		</section>
	</body>
</html>