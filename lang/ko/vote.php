<!DOCTYPE html>
<html>
	<!-- 헤더 -->
	<?php
	include ("header.php");
	?>

	<body>
		<!-- 메뉴 -->
		<?php
		include ("menu.php");
		?>

		<!-- 메인 컨텐츠 -->
		<div class="container" style="text-align: center ">
			<div class="jumbotron">

				<!-- 준비중 코드 -->
				<div class="container">
					<h1> 현재 준비중입니다.</h1>
					<h1><small>빠르게 준비하도록 하겠습니다 :)</small></h1>
				</div>

				<?php
				/*
				 	스피드 경기 시작 시 PHP 주석 제거
				  				
				 <!-- 시작 코드 -->
				<div class="container" style="margin-top: -30px;">				
					<div class="visible-xs">
						<div class="container">
							</br>


							<button class="btn btn-info btn-lg" onclick="window.open('vote_mobile.php')">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 투표 하기
							</button>
						</div>
					</div>

					<div class="visible-sm">
						<div class="container">
							</br>
							<button class="btn btn-info btn-lg" onclick="window.open('vote_mobile.php')">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 투표 하기
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
					*/
					?>
										
					<div class="visible-xs">
						<h3><small>프리스타일 대전의 심사위원은 바로 <font style="color:#FF0000;">여러분</font>입니다 !</br>
							공정한 평가를 위해 <font style="color:#FF0000;">Youtube</font> 및 <font style="color:#0000FF;">Facebook</font>에서 진행되는 실시간 경기를 관람하신 후</br> 모든 프리스타일 경기가 종료 된 후 투표해주시면 됩니다.	</h3>
					</div>

					<div class="visible-sm">
						<h2><small>프리스타일 대전의 심사위원은 바로 <font style="color:#FF0000;">여러분</font>입니다 !</br>
							공정한 평가를 위해 <font style="color:#FF0000;">Youtube</font> 및 <font style="color:#0000FF;">Facebook</font>에서 진행되는 실시간 경기를 관람하신 후</br> 모든 프리스타일 경기가 종료 된 후 투표해주시면 됩니다.	</h2>
					</div>

					<div class="visible-md">
						<h2><small>프리스타일 대전의 심사위원은 바로 <font style="color:#FF0000;">여러분</font>입니다 !</br>
							공정한 평가를 위해 <font style="color:#FF0000;">Youtube</font> 및 <font style="color:#0000FF;">Facebook</font>에서 진행되는 실시간 경기를 관람하신 후</br> 모든 프리스타일 경기가 종료 된 후 투표해주시면 됩니다.	</h2>
					</div>

					<div class="visible-lg">
						<h2><small>프리스타일 대전의 심사위원은 바로 <font style="color:#FF0000;">여러분</font>입니다 !</br>
							공정한 평가를 위해 <font style="color:#FF0000;">Youtube</font> 및 <font style="color:#0000FF;">Facebook</font>에서 진행되는 실시간 경기를 관람하신 후</br> 모든 프리스타일 경기가 종료 된 후 투표해주시면 됩니다. </h2>
					</div>

					
					<!-- 여기까지 jumbotron 코드 -->

				</div>
			</div>
		</div>

		<!-- 댓글 플러그인 -->
		<div class="container">

			<h3><small><img src="../img/facebook.png" width="20px" height="20px"> 선수분들을 응원해주세요 :)</small></h3>
			<div class="fb-comments" data-href="http://openworld.iptime.org/" data-width="100%" data-numposts="50"></div>
		</div>
	</body>

</html>
