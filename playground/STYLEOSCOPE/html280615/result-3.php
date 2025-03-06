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
				<div class="row result-row">
					<div class="col-xs-12 text-center">
						<h3>Foodie</h3>
						<p>Sweet! You’re a foodie. Which means you love food a lot. Like a lot, a lot!</p>
						<div class="row result">
							<div class="col-xs-6">
								<div class="box-orange">
									<div><img src="images/foodie-male.png"></div>
									<h3 class="glyphicon  glyphicon glyphicon-ok-circle" aria-hidden="true"></h3>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="box-white">
									<div><img src="images/foodie-female.png"></div>
									<h3 class="glyphicon  glyphicon glyphicon-ok-circle" aria-hidden="true"></h3>
								</div>
							</div>
						</div>          
	     				<div class="enter"><a href="upload-photo-3.php" class="btn btn-default btn-enter enter-result">CONTINUE</a></div> 
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