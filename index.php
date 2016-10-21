<!DOCTYPE html>
<html>
	<head>

		<!-- UTF-8로 설정 -->
		<meta charset="UTF-8">
		<title>Welcome to TPF 2016</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		


		<!-- 부트스트랩 불러오기 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<!-- 자바스크립트 불러오기 -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<!-- youtube 구독 버튼 -->
		<script src="https://apis.google.com/js/platform.js"></script>

		<!-- CSS 불러오기 -->
		<link rel="stylesheet" href="css/video.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/sticky-footer.css">

	</head>

	<!-- lg-->
	<div class="visible-lg">
		<?php
		include ("viewport/lg.php");
		?>
	</div>

	<!-- md -->
	<div class="visible-md">
		<?php
		include ("viewport/md.php");
		?>
	</div>

	<!-- sm -->
	<div class="visible-sm">
		<?php
		include ("viewport/sm.php");
		?>
	</div>

	<!-- xs -->
	<div class="visible-xs">
		<?php
		include ("viewport/xs.php");
		?>
	</div>
</html>

