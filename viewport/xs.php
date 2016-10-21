<body class ="p" style="text-align: center; margin-left:10px;">

	<div class="container-fluid animated 1 fadeInDown p" style="text-align: center; margin-top:25px;">
		<img src="img/tpf_logo.png" width="60%" height="60%" style="text-align: center;">
	</div>
	</br>
	
	<div class="container font">
		Welcome to </br>TPF 2016 Page.</br>
		Choose your Language.
	</div>
	</br>
	<!-- What is the TPF 버튼 -->
	<div class="container p" style ="text-align: center; margin-top:10px;">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >
			<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> What is the TPF?
		</button>
	</div>

	</br>
	<div class="container" style="text-align: center; margin-top: 30px; margin-left:-5px; padding-left: 0px; padding-right: 0px;">
		<div class="row">

			<div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
				<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
					<img src="img/korea.png" class="img-rounded" onClick="location.href='/lang/ko';" width="50%" height="50%">
					</br>
					<h5 class="font">한국어</h5>
					</br>
				</div>
			</div>

			<div class="container" style="padding-left: 0px; padding-right: 0px;">
				<img src="img/mexico.png" class="img-rounded" onClick="location.href='/lang/es';" width="25%" height="25%">
				</br>
				<h5 class="font">Español</h5>
				</br>
			</div>

			<div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
				<div class="container-fluid">
					<img src="img/america.png" class="img-rounded" onClick="location.href='/lang/en';" width="60%" height="60%">
					</br>
					<h5 class="font">English</h5>
					</br>
				</div>
			</div>
			<div class="container" style="padding-left: 0px; padding-right: 0px;">
				<img src="img/japan.png" class="img-rounded" onClick="location.href='/lang/jp';" width="25%" height="25%">
				</br>
				<h5 class="font">日本語</h5>
			</div>
		</div>
	</div>

</body>


<?php include("modal.php");?>