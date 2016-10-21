<!DOCTYPE html>
<html>
	<!-- 헤더 -->
	<?php
	include ("header.php");
	?>

	<body>
		<!-- menu -->
		<?php
		include ("menu.php");
		?>

		<!-- main contents -->
		<div class="container" style="text-align: center ">
			<div class="jumbotron">
								
				<!-- Vote Comming soon -->
				<div class="container">
					<h1> Coming soon.</h1>
					<h1><small>We will be back soon.</br> Thank you.</small></h1>
				</div>
				
				<?php
				/*
				<div class="container" style="margin-top: -30px;">

					<div class="visible-xs">
						<div class="container">
							</br>

							<!-- if button deactive disabled -->
							<button class="btn btn-info btn-lg" onclick="window.open('vote_mobile.php')">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Let's Poll
							</button>
						</div>
					</div>
					<!-- if button deactive disabled -->
					
					<div class="visible-sm">
						<div class="container">
							</br>
							<button class="btn btn-info btn-lg" onclick="window.open('vote_mobile.php')">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Let's Poll
							</button>
						</div>
					</div>

					<div class="visible-md">
						<div class="container">
							<?php
							include ("vote_desk.php");
							?>
						</div>

						</br>
					</div>

					<div class="visible-lg">
						<div class="container">
							<?php
							include ("vote_desk.php");
							?>
						</div>

						</br>
					</div>
					
				 */?>
				 
					<div class="visible-xs">
						<h3><small>Every one of <font style="color:#FF0000;"> You is a Freestyle judge!</font></br>
							Please vote for the <font style="color:#FF0000;">Best freestyler</font> after watching all the performances.
					</div>

					<div class="visible-sm">
						<h2><small>Every one of <font style="color:#FF0000;"> You is a Freestyle judge!</font></br>
							Please vote for the <font style="color:#FF0000;">Best freestyler</font> after watching all the performances.</h2>
					</div>

					<div class="visible-md">
						<h2><small>Every one of <font style="color:#FF0000;"> You is a Freestyle judge!</font></br>
							Please vote for the <font style="color:#FF0000;">Best freestyler</font> after watching all the performances.</h2>
					</div>

					<div class="visible-lg">
						<h2><small>Every one of <font style="color:#FF0000;"> You is a Freestyle judge!</font></br>
							Please vote for the <font style="color:#FF0000;">Best freestyler</font> after watching all the performances.</h2>
					</div>

				<!-- End of jumbotron code -->

				</div>
			</div>
		</div>

		<!-- comments plugin -->
		<div class="container">

			<h3><small><img src="../img/facebook.png" width="20px" height="20px"> Leave an encouraging comment for players. :)</small></h3>
			<div class="fb-comments" data-href="http://openworld.iptime.org/" data-width="100%" data-numposts="50"></div>
		</div>
	</body>

</html>
