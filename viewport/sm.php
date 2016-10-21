<body>

	<div class="container-fluid animated 1 fadeInDown" style="text-align: center; margin-top:25px;">
		<img src="img/tpf_logo.png" width="50%" height="50%" style="text-align: center;">
	</div>
	</br>
	<div class="container font">
		Welcome to TPF 2016 Page.</br>
		Choose your Language.
	</div>

	<!-- What is the TPF 버튼 -->
	<div class="container" style ="text-align: center; margin-top:10px;">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >
			<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> What is the TPF?
		</button>

	</div>
	</br></br>
	<div class="container" style="text-align: center; margin-top: 30px padding-left: 0px; padding-right: 0px;">
		<div class="row">

			<div class="col-sm-6">
				<div class="container-fluid">
					<img src="img/korea.png" class="img-rounded" onClick="location.href='/lang/ko';">
					</br>
					<h5 class="font">한국어</h5>
					</br>
				</div>
			</div>

			<div class="container-fluid">
				<img src="img/mexico.png" class="img-rounded" onClick="location.href='/lang/es';">
				</br>
				<h5 class="font">Español</h5>
				</br>
			</div>

			<div class="col-sm-6">
				<div class="container-fluid">
					<img src="img/america.png" class="img-rounded" onClick="location.href='/lang/en';">
					</br>
					<h5 class="font">English</h5>
					</br>
				</div>
			</div>
			<div class="container-fluid">
				<img src="img/japan.png" class="img-rounded" onClick="location.href='/lang/jp';">
				</br>
				<h5 class="font">日本語</h5>
			</div>
			</br>

		</div>
	</div>

</body>

<!-- footer 부분 -->
<footer class="footer">
	<!-- -->
	<div class="container">
		<div class ="container" style="margin-top : 5px; text-align: center; padding-left: 0px;padding-right: 0px;">
			TPF 2016 Has support Facebook and Youtube Live Stream ! &nbsp;
			<div class="g-ytsubscribe" style="margin-top : 50px;"data-channel="mentormin" data-layout="default" data-theme="dark" data-count="hidden"></div>
		</div>
	</div>
	</div>
</footer>

<?php include("modal.php");?>
