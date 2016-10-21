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
				<?php
				/*
				 <div class="container">
				 <h1> 현재 준비중입니다.</h1>
				 <h1><small>빠르게 준비하도록 하겠습니다 :)</small></h1>
				 </div>
				 * */
				?>

				<!-- 시작 코드-->

				<div class="container" style="margin-top: -30px;">

					<!-- Jumbotron 내부 코드 구현 부 -->
					<div class="container">
						<h1> 대회 지정곡</h1>
						<h2><small>TPF 2016의 스피드 부문, 프리스타일 부분 대회 지정곡 입니다.</small></h2>
					</div></br>

					<!-- 대회 규정 -->
					<div class="visible-xs">
						<button class="btn btn-info btn-lg" onclick="window.open('https://docs.google.com/spreadsheets/d/1eg5lhCXouz8T-BW83bacRtZMneJn5h3A38jqO6NERqI/edit?usp=sharing')">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 지정곡 보기
						</button>

						<h3><small>TPF 2016의 <font style="color:#FF0000;">대회 지정곡</font> 입니다.</br> <font style="color:#FF0000;">대회 참가 전 충분히 숙지</font>하시기 바랍니다.</small></h3>
					</div>

					<div class="visible-sm">
						<button class="btn btn-info btn-lg" onclick="window.open('https://docs.google.com/spreadsheets/d/1eg5lhCXouz8T-BW83bacRtZMneJn5h3A38jqO6NERqI/edit?usp=sharing')">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 지정곡 보기
						</button>

						<h3><small>TPF 2016의 <font style="color:#FF0000;">대회 지정곡</font> 입니다.</br> <font style="color:#FF0000;">대회 참가 전 충분히 숙지</font>하시기 바랍니다.</small></h3>
					</div>

					<div class="visible-md">
						<button class="btn btn-info btn-lg" onclick="window.open('https://docs.google.com/spreadsheets/d/1eg5lhCXouz8T-BW83bacRtZMneJn5h3A38jqO6NERqI/edit?usp=sharing')">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 지정곡 보기
						</button>

						<h2><small>TPF 2016의 <font style="color:#FF0000;">대회 지정곡</font> 입니다.</br> <font style="color:#FF0000;">대회 참가 전 충분히 숙지</font>하시기 바랍니다.</small></h2>
					</div>

					<div class="visible-lg">
							<button class="btn btn-info btn-lg" onclick="window.open('https://docs.google.com/spreadsheets/d/1eg5lhCXouz8T-BW83bacRtZMneJn5h3A38jqO6NERqI/edit?usp=sharing')">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 지정곡 보기
						</button>

						<h2><small>TPF 2016의 <font style="color:#FF0000;">대회 지정곡</font> 입니다.</br> <font style="color:#FF0000;">대회 참가 전 충분히 숙지</font>하시기 바랍니다.</small></h2>
					</div>

					<!-- 여기까지 jumbotron 코드 -->

				</div>
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
