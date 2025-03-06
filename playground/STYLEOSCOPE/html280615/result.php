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
						<h3>Fashionista</h3>
						<p>Looks like you’re a fashionista! So your wardrobe is probably bigger than your room.</p>
						<div class="row result">
							<div class="col-xs-6">
								<div class="box-orange">
									<div><img src="images/fashionista-male.png"></div>
									<h3 class="glyphicon  glyphicon glyphicon-ok-circle" aria-hidden="true"></h3>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="box-white">
									<div><img src="images/fashionista-female.png"></div>
									<h3 class="glyphicon  glyphicon glyphicon-ok-circle" aria-hidden="true"></h3>
								</div>
							</div>
						</div>          
	     				<div class="enter"><a href="upload-photo.php" class="btn btn-default btn-enter enter-result">CONTINUE</a></div> 
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