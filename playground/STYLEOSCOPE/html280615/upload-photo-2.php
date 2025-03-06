<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	

	  		<div class="top-bar"></div>
		 	
			<!-- START HOME CONTENT -->


			<div class="content container">
				<div class="row upload-row">
					<div class="col-xs-12 text-center">
						<h3>But first, it’s time to pick </br>a selfie!</h3>
						<div class="row upload">
							<div class="col-xs-6">
								<div class="box-grey">
									<img src="images/urbanite-female-upload.png">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="box-white">
									<img src="images/user-icon.png">
								</div>
							</div>
							<div class="col-xs-12 ico-upload"><img src="images/ico-upload.png"></div>
						</div>
						<div class="row upload-btn">
							<div class="col-sm-6">
								<a href="#small" class="btn btn-white btn-block" data-toggle="modal">UPLOAD PHOTO</a>
							</div>
							<div class="col-sm-6">
								<a href="#" class="btn btn-white btn-block btn-take-photo">TAKE A PHOTO</a>
							</div>
							<div class="col-xs-12 skip">
								<a href="enter-name.php" class="orange">SKIP</a>
							</div>
						</div>           
					</div>
				</div>
			</div>

			<!-- END HOME CONTENT  -->


			 <?php
			 require("inc/footer.php");
			 ?> 

		     <?php
		     require("inc/js.php");
		     ?> 
	  	</body><!-- END BODY -->
</html>