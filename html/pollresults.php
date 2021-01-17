<?php 
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

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Poll | Andrew Zheng</title>
		<link rel="stylesheet" type="text/css" href="../css/personalweb.css">
		<script src="../js/progress.js"></script>
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
				<div class="progress">
					<?php 
						$total = 0;
						$A = 0;
						$B = 0;
						$C = 0;
						$D = 0;
						foreach($answers as $answer){ 
							if($answer['id'] == '1'){
								$total = $answers[0]['A'] + $answers[0]['B'] + $answers[0]['C'] + $answers[0]['D'];
								$A = $answers[0]['A'];
								$B = $answers[0]['B'];
								$C = $answers[0]['C'];
								$D = $answers[0]['D'];
								break;
							}
						}
						$A = round($A/$total * 100) ;
						$B = round($B/$total * 100) ;
						$C = round($C/$total * 100) ;
						$D = round($D/$total * 100) ;
					?>
					<h2>WHICH POCKET DO YOU PUT YOUR PHONE IN?</h2>
				  <p>Left - <strong><?php echo $A?>%</strong></p>
				  <div data-progress="<?php echo $A?>"></div>

				  <p>Right - <strong><?php echo $B?>%</strong></p>
				  <div data-progress="<?php echo $B?>"></div>

				  <p>Back - <strong><?php echo $C?>%</strong></p>
				  <div data-progress="<?php echo $C?>"></div>

				  <p>Don't have pockets - <strong><?php echo $D?>%</strong></p>
				  <div data-progress="<?php echo $D?>"></div>
				</div>
			</div>

			<div class="progress">
					<?php 
						$total = 0;
						$A = 0;
						$B = 0;
						$C = 0;
						$D = 0;
						foreach($answers as $answer){ 
							if($answer['id'] == '2'){
								$total = $answers[1]['A'] + $answers[1]['B'] + $answers[1]['C'] + $answers[1]['D'];
								$A = $answers[1]['A'];
								$B = $answers[1]['B'];
								$C = $answers[1]['C'];
								$D = $answers[1]['D'];
								break;
							}
						}
						$A = round($A/$total * 100) ;
						$B = round($B/$total * 100) ;
						$C = round($C/$total * 100) ;
						$D = round($D/$total * 100) ;
					?>
					<h2>BRUSH TEETH BEFORE OR AFTER BREAKFAST?</h2>
				  <p>Before - <strong><?php echo $A?>%</strong></p>
				  <div data-progress="<?php echo $A?>"></div>

				  <p>After - <strong><?php echo $B?>%</strong></p>
				  <div data-progress="<?php echo $B?>"></div>

				  <p>Don't brush - <strong><?php echo $C?>%</strong></p>
				  <div data-progress="<?php echo $C?>"></div>

				  <p>What's breakfast? - <strong><?php echo $D?>%</strong></p>
				  <div data-progress="<?php echo $D?>"></div>
				</div>
			</div>

			<div class="progress">
					<?php 
						$total = 0;
						$A = 0;
						$B = 0;
						$C = 0;
						$D = 0;
						foreach($answers as $answer){ 
							if($answer['id'] == '3'){
								$total = $answers[2]['A'] + $answers[2]['B'] + $answers[2]['C'] + $answers[2]['D'];
								$A = $answers[2]['A'];
								$B = $answers[2]['B'];
								$C = $answers[2]['C'];
								$D = $answers[2]['D'];
								break;
							}
						}
						$A = round($A/$total * 100) ;
						$B = round($B/$total * 100) ;
						$C = round($C/$total * 100) ;
						$D = round($D/$total * 100) ;
					?>
					<h2>WHICH THUMB DO YOU USE TO HIT THE SPACEBAR?</h2>
				  <p>Right - <strong><?php echo $A?>%</strong></p>
				  <div data-progress="<?php echo $A?>"></div>

				  <p>Left - <strong><?php echo $B?>%</strong></p>
				  <div data-progress="<?php echo $B?>"></div>

				  <p>Both - <strong><?php echo $C?>%</strong></p>
				  <div data-progress="<?php echo $C?>"></div>

				  <p>Alternate - <strong><?php echo $D?>%</strong></p>
				  <div data-progress="<?php echo $D?>"></div>
				</div>
			</div>

			<div class="progress">
					<?php 
						$total = 0;
						$A = 0;
						$B = 0;
						$C = 0;
						$D = 0;
						foreach($answers as $answer){ 
							if($answer['id'] == '4'){
								$total = $answers[3]['A'] + $answers[3]['B'] + $answers[3]['C'] + $answers[3]['D'];
								$A = $answers[3]['A'];
								$B = $answers[3]['B'];
								$C = $answers[3]['C'];
								$D = $answers[3]['D'];
								break;
							}
						}
						$A = round($A/$total * 100) ;
						$B = round($B/$total * 100) ;
						$C = round($C/$total * 100) ;
						$D = round($D/$total * 100) ;
					?>
					<h2>HOW HARD DO YOU HIT YOUR ENTER KEY?</h2>
				  <p>Soft - <strong><?php echo $A?>%</strong></p>
				  <div data-progress="<?php echo $A?>"></div>

				  <p>Medium - <strong><?php echo $B?>%</strong></p>
				  <div data-progress="<?php echo $B?>"></div>

				  <p>Hard - <strong><?php echo $C?>%</strong></p>
				  <div data-progress="<?php echo $C?>"></div>

				  <p>SUPER HARD - <strong><?php echo $D?>%</strong></p>
				  <div data-progress="<?php echo $D?>"></div>
				</div>
			</div>

			<div class="progress">
					<?php 
						$total = 0;
						$A = 0;
						$B = 0;
						$C = 0;
						$D = 0;
						foreach($answers as $answer){ 
							if($answer['id'] == '5'){
								$total = $answers[4]['A'] + $answers[4]['B'] + $answers[4]['C'] + $answers[4]['D'];
								$A = $answers[4]['A'];
								$B = $answers[4]['B'];
								$C = $answers[4]['C'];
								$D = $answers[4]['D'];
								break;
							}
						}
						$A = round($A/$total * 100) ;
						$B = round($B/$total * 100) ;
						$C = round($C/$total * 100) ;
						$D = round($D/$total * 100) ;
					?>
					<h2>WHEN DO YOU SHOWER?</h2>
				  <p>Morning - <strong><?php echo $A?>%</strong></p>
				  <div data-progress="<?php echo $A?>"></div>

				  <p>Noon - <strong><?php echo $B?>%</strong></p>
				  <div data-progress="<?php echo $B?>"></div>

				  <p>Afternoon - <strong><?php echo $C?>%</strong></p>
				  <div data-progress="<?php echo $C?>"></div>

				  <p>Evening - <strong><?php echo $D?>%</strong></p>
				  <div data-progress="<?php echo $D?>"></div>
				</div>
			</div>

			<div class="progress">
					<?php 
						$total = 0;
						$A = 0;
						$B = 0;
						$C = 0;
						$D = 0;
						foreach($answers as $answer){ 
							if($answer['id'] == '6'){
								$total = $answers[5]['A'] + $answers[5]['B'] + $answers[5]['C'] + $answers[5]['D'];
								$A = $answers[5]['A'];
								$B = $answers[5]['B'];
								$C = $answers[5]['C'];
								$D = $answers[5]['D'];
								break;
							}
						}
						$A = round($A/$total * 100) ;
						$B = round($B/$total * 100) ;
						$C = round($C/$total * 100) ;
						$D = round($D/$total * 100) ;
					?>
					<h2 style="font-size: 20px;">DO YOU PAY ATTENTION DURING MR. MILLARD'S LECTURES?</h2>
				  <p>Yes I do! - <strong><?php echo $A?>%</strong></p>
				  <div data-progress="<?php echo $A?>"></div>

				  <p>No way! - <strong><?php echo $B?>%</strong></p>
				  <div data-progress="<?php echo $B?>"></div>

				  <p>Sometimes - <strong><?php echo $C?>%</strong></p>
				  <div data-progress="<?php echo $C?>"></div>

				  <p>His lectures are the best! - <strong><?php echo $D?>%</strong></p>
				  <div data-progress="<?php echo $D?>"></div>
				</div>
			</div>
		</section>
	</body>
</html>