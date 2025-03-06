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
				<div class="row">
					<div class="brand col-xs-12 text-center">
						<img src="images/brand.png"/>
					</div>
					
					<div class="login col-xs-12 text-center">          
	     				<div class="fb-login-button">
	     					<a href="#"><img src="images/fb-btn.png"></a>
	     				</div>
	     				<div class="enter">
	     					<a href="landing.php" class="btn btn-default btn-enter">ENTER &nbsp <span><img src="images/arrow-button.png"></span></a>
	     				</div> 
					</div>
				</div>
			</div>

			<div class="main-image"></div>


			<!-- END HOME CONTENT  -->


			 <?php
			 require("inc/footer.php");
			 ?> 

		     <?php
		     require("inc/js.php");
		     ?> 
	  	</body><!-- END BODY -->
</html>